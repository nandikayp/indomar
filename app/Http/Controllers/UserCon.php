<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserCon extends Controller
{
    public function index(Request $request)
    {


        $user = DB::table('user')->get();
        return view('user', ['user' => $user]);
    }


    public function input()
    {
        return view('tambahuser');
    }

    public function storeinput(Request $request)
    {


        DB::table('user')->insert([
            'userID' => $request->id,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat1'=>$request->alamat1,
            'alamat2'=>$request->alamat2,
            'kodepos'=>$request->kodepos,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),


        ]);
        // alihkan halaman ke route produk
        Session::flash('message', 'Input Berhasil.');
        return redirect('/user');
    }

    public function update($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        $user = DB::table('user')->where('userID', $id)->get();
        // passing data produk yang didapat ke view edit.blade.php
        return redirect('/user');
    }

    public function storeupdate(Request $request)
    {
        // update data produk
        if (!empty($request->password)) {
            DB::table('user')->where('userID', $request->id)->update([
                'nama' => $request->nama,
                'telepon'=>$request->telepon,
                'alamat1'=>$request->alamat1,
                'alamat2'=>$request->alamat2,
                'kodepos'=>$request->kodepos,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)
            ]);
        } else {
            DB::table('user')->where('userID', $request->id)->update([
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'alamat1' => $request->alamat1,
                'alamat2' => $request->alamat2,
                'kodepos' => $request->kodepos,
                'email' => $request->email
            ]);
        }

        // alihkan halaman ke halaman produk
        return redirect('/user');
    }

    public function delete($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        DB::table('user')->where('userID', $id)->delete();
        // passing data produk yang didapat ke view edit.blade.php
        return redirect('/user');
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
