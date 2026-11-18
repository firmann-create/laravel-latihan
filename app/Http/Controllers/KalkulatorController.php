<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // Menampilkan form
    public function segitiga()
    {
        return view('kalkulator.segitiga', [
            'judul' => 'KALKULATOR LUAS SEGITIGA',
        ]);
    }

    // Memproses perhitungan: Luas = 1/2 x alas x tinggi
    public function hitungSegitiga(Request $request)
    {
        $data = $request->validate([
            'alas'   => 'required|numeric|gt:0',
            'tinggi' => 'required|numeric|gt:0',
        ], [
            'alas.required'   => 'Alas wajib diisi.',
            'alas.numeric'    => 'Alas harus berupa angka.',
            'alas.gt'         => 'Alas harus lebih dari 0.',
            'tinggi.required' => 'Tinggi wajib diisi.',
            'tinggi.numeric'  => 'Tinggi harus berupa angka.',
            'tinggi.gt'       => 'Tinggi harus lebih dari 0.',
        ]);

        $luas = 0.5 * $data['alas'] * $data['tinggi'];

        return view('kalkulator.segitiga', [
            'judul'  => 'KALKULATOR LUAS SEGITIGA',
            'alas'   => $data['alas'],
            'tinggi' => $data['tinggi'],
            'luas'   => $luas,
        ]);
    }
}
