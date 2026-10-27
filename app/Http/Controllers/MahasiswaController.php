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

        return view('mahasiswa.profil', compact('mahasiswa'));
    }

    public function daftar()
    {
        $data = [
            ['id' => 1, 'nama' => 'Alfin Hidayat', 'nim' => '242520001', 'ipk' => 3.6],
            ['id' => 2, 'nama' => 'Sandika Galih', 'nim' => '242520020', 'ipk' => 4.0],
            ['id' => 3, 'nama' => 'Arfy', 'nim' => '242520012', 'ipk' => 3.0],
            ['id' => 4, 'nama' => 'Dea Afrizal', 'nim' => '242520010',  'ipk' => 3.3],
            ['id' => 5, 'nama' => 'Hubner', 'nim' => '242520056', 'ipk' => 3.34],
        ];

        return view('mahasiswa.index', compact('data'));
    }

    public function show($nim)
    {
        abort_unless(in_array($nim, [
            '242520001',
            '242520020',
            '242520012',
            '242520010',
            '242520056'
        ]), 404);
        return view('mahasiswa.detail', ['nim' => $nim]);
    }
}
