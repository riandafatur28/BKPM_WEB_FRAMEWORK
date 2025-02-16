<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        // return "Halo, ini adalah method index dalam controller ManagementUser.";
        // return "Method ini nantinya akan digunakan untuk menampilkan detail data user.";

        $nama = "Rianda Faturrahman";

        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];

        return view('home', compact('nama','pelajaran'));
    }
}
