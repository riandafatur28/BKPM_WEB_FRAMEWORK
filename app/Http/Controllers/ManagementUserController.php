<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController
{
    // Method untuk menampilkan semua data user
    public function index()
    {
        // return "Halo ini adalah method index, dalam controller ManagementUser";
        $nama = "Rianda Faturrahman";

        $pelajaran = ["Logika & Algoritma","Matematika Diskrit","Pemrograman Web Framework"];

        return view('home', compact('nama','pelajaran'));
    }

    // Method untuk menampilkan form untuk menambah data user
    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }

    // Method untuk menyimpan data user yang baru
    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    // Method untuk menampilkan data user berdasarkan ID
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id " . $id;
    }

    // Method untuk menampilkan form untuk mengubah data user berdasarkan ID
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data user dengan id " . $id;
    }

    // Method untuk mengupdate data user berdasarkan ID
    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id " . $id;
    }

    // Method untuk menghapus data user berdasarkan ID
    public function destroy($id)
    {
        return "Method ini nantinya digunakan untuk menghapus data user dengan id " . $id;
    }
}
