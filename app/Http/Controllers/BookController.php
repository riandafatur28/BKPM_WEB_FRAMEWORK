<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Jika sebuah controller memiliki seluruh proses create, read, update, delete(CRUD). Buat menggunakan perintah php artisan make:controller <nama controller> --resource
 * @link https://laravel.com/docs/11.x/controllers#resource-controllers
 */
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'Metode ini digunakan untuk mengambil semua data'; dikomentar terlebih dahulu(bagian acara 5)

        // acara 6
        $name = "Rianda Faturrahman";
        $pelajaran = ['Algoritma', 'Basis Data', 'Kalkulus', 'WKPL'];
        return view('book', compact('name', 'pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Metode ini digunakan untuk menampilkan form tambah data';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Metode ini digunakan untuk menambah data baru';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Metode ini digunakan untuk menampilkan data tertentu berdasarkan id';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'Metode ini digunakan untuk menampilkan form edit data';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Metode ini digunakan untuk memperbarui data berdasarkan id';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Metode ini digunakan untuk menghapus sebuah data berdasarkan id';
    }
}
