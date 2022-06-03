<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function add(){
        $barangs = Barang::all();
        return view('addbook', ['barangs' => $barangs]);
    }

    public function view(){
        $barangs = Barang::get();
        return view('view', ['barangs' => $barangs]);
    }

    public function addbook(Request $request){

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
}
