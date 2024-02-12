<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class KategoriCon extends Controller
{
 public function index(Request $request)
    {


        $kategori = DB::table('kategori')->get();
        return view('kategori', ['kategori' => $kategori]);
    }


    public function input()
    {
        return view('tambahkategori');
    }

    public function storeinput(Request $request)
    {


        DB::table('kategori')->insert([
            'KategoriID' => $request->id,
            'namaKategori' => $request->nama,
            'deskripsiKategori' => $request->deskripsi,

        ]);
        // alihkan halaman ke route produk
        Session::flash('message', 'Input Berhasil.');
        return redirect('/kategori');
    }

    public function update($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        $kategori = DB::table('kategori')->where('KategoriID', $id)->get();
        // passing data produk yang didapat ke view edit.blade.php
        return redirect('/kategori');
    }

    public function storeupdate(Request $request)
    {
        // update data produk

        DB::table('kategori')->where('KategoriID', $request->id)->update([
            'namaKategori' => $request->nama,
            'deskripsiKategori'=>$request->deskripsi,
        ]);

        // alihkan halaman ke halaman produk
        return redirect('/kategori');
    }

    public function delete($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        DB::table('kategori')->where('kategoriID', $id)->delete();
        // passing data produk yang didapat ke view edit.blade.php
        return redirect('/kategori');
    }

    public function search(Request $request){
        if($request->has('search')){
            $laptop = DB::table('laptop')->where('nama','LIKE','%'.$request->search.'%');
        }
        else{
              $laptop = DB::table('laptop')->get();


        }

        return view('laptop', ['laptop' => $laptop]);
    }
}
