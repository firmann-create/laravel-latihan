<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga()
    {
        return view('segitiga', ['judul' => 'KALKULATOR LUAS SEGITIGA']);
    }

    public function hitungSegitiga(Request $request)
    {
        $data = $request->validate([
            'alas'   => 'required|numeric|gt:0',
            'tinggi' => 'required|numeric|gt:0',
        ]);

        return view('segitiga', [
            'judul'  => 'KALKULATOR LUAS SEGITIGA',
            'alas'   => $data['alas'],
            'tinggi' => $data['tinggi'],
            'luas'   => 0.5 * $data['alas'] * $data['tinggi'],
        ]);
    }
}