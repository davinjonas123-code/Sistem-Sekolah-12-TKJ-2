<?php

namespace App\Http\Controllers;

class MajorController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar jurusan";
    }

    public function create()
    {
        return "Menampilkan halaman tambah jurusan";
    }

    public function store()
    {
        return "Melakukan penambahan data jurusan";
    }

    public function show(string $id)
    {
        return "Menampilkan jurusan dengan ID: {$id}";
    }

    public function edit()
    {
        return "Menampilkan halaman edit jurusan";
    }

    public function update()
    {
        return "Melakukan perubahan data jurusan";
    }

    public function destroy()
    {
        return "Menghapus data jurusan";
    }
}