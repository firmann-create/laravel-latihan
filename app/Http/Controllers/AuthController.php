<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//load Model User
use App\Models\User;
//load HASH untuk cek password
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //fungsi untuk login
    public function cek(Request $request) {
        //mencari data email di table users
        $data=User::where('email',$request->email)->firstOrFail();
        //jika datanya ketemu
        if($data) {
            //cek apakah password sama
            if(Hash::check($request->password,$data->password)) {
                //simpan session
                session(['email' => $request->email]);
                session(['logged_in' => true]);
                //masuk ke halaman CRUD pegawai
                return redirect('/employe');
            } else {
                //kembali ke login
                return redirect('/login');
            }
        } else {
            //kembali ke login
            return redirect('/login');
        }
    }

    //fungsi untuk logout
    public function logout(Request $request) {
        //hapus semua session
        $request->session()->flush();
        //kembali ke login
        return redirect('/login');
    }
}
