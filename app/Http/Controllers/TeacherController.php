<?php

namespace App\Http\Controllers;

class TeacherController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar guru";
    }

    public function create()
    {
        return "Menampilkan halaman tambah guru";
    }

    public function store()
    {
        return "Melakukan penambahan data guru";
    }

    public function show(string $id)
    {
        return "Menampilkan guru dengan ID: {$id}";
    }

    public function edit()
    {
        return "Menampilkan halaman edit guru";
    }

    public function update()
    {
        return "Melakukan perubahan data guru";
    }

    public function destroy()
    {
        return "Menghapus data guru";
    }
}