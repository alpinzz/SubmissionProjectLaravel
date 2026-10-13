<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $mahasiswa = [
            ['id' => 1, 'nama' => 'Alfin Hidayat', 'nim' => '242520001', 'prodi' => 'Teknologi Informasi']
        ];

        return view('mahasiswa.index', compact('mahasiswa'));
    }
}
