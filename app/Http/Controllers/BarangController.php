<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BarangController extends Controller
{
    public function add(){
        $barangs = Barang::all();
        return view('addbarang', compact('barangs'));
    }

    public function view(){
        $barangs = Barang::get();
        return view('view', compact('barangs'));
    }

    public function addbarang(Request $request){

        $extension = $request->file('file')->getClientOriginalExtension();
        $namafile = $request->nama.'_'.$request->warna.'.'.$extension;
        $request->file('file')->storeAs('public/image/',$namafile);


        Barang::create([
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
}
