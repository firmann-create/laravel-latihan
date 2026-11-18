<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nama' => 'Anton', 'alamat' => 'Surabaya', 'gender' => 'L'],
            ['nama' => 'Budi',  'alamat' => 'Kediri',   'gender' => 'L'],
            ['nama' => 'Ani',   'alamat' => 'Malang',   'gender' => 'P'],
            ['nama' => 'Sinta', 'alamat' => 'Surabaya', 'gender' => 'P'],
        ];

        // Parsing data ke view
        return view('mahasiswa.index', [
            'judul'     => 'DAFTAR MAHASISWA',
            'mahasiswa' => $mahasiswa,
        ]);
    }
}
