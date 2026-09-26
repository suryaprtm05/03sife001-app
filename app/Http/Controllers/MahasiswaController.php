<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Data dikirim ke view menggunakan array
        $mahasiswa = [
            'nama'   => 'Ahmad Surya Pratama',
            'nim'    => '251011701082',
            'prodi'  => 'Sistem Informasi',
            'email'  => 'suryaprtm05@gmail.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'aktif'
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}