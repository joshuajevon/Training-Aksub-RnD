<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class BarangController extends Controller
{
    public function add(){
        $kategoris = Kategori::all();
        return view('addbarang', compact('kategoris'));
    }

    public function view(){
        $barangs = Barang::all();
        $kategoris = Kategori::all();
        return view('view', compact('barangs', 'kategoris'));
    }

    public function addbarang(Request $request){

        $extension = $request->file('file')->getClientOriginalExtension();
        $namafile = $request->nama.'_'.$request->warna.'.'.$extension;
        $request->file('file')->storeAs('public/image/',$namafile);


        Barang::create([
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'kuantitas' => $request->kuantitas,
            'warna' => $request->warna,
            'file' => $namafile,
        ]);
        return redirect(route('view'));
    }

    public function editbarang($id){
        $barang = Barang::find($id);
        return view('editbarang', compact('barang', 'id'));
    }

    public function updatebarang(Request $request, $id){
        $barang = Barang::find($id);

        $extension = $request->file('file')->getClientOriginalExtension();
        $namafile = $request->nama.'_'.$request->warna.'.'.$extension;
        $request->file('file')->storeAs('public/image/',$namafile);


        $barang->update([
            'nama' => $request->nama,
            'kuantitas' => $request->kuantitas,
            'warna' => $request->warna,
            'file' => $namafile,
        ]);
        $barang->save();
        return redirect(route('view'));
    }

    public function deletebarang($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect(route('view'));
    }

    public function addkategori(){
        $kategoris = Kategori::all();
        return view('addkategori', compact('kategoris'));
    }

    public function kategori(Request $request){

        Kategori::create([
            'namaKategori' => $request->namaKategori,
        ]);

        return redirect(route('view'));
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $kategoris = kategori::where('namaKategori', $cari)->first();

        $barangs = Barang::where('kategori_id', $kategoris->id)->get();

        return view('view', compact('barangs'));
    }


}
