<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }

    public function show(string $id)
    {
        return "Ini adalah siswa dengan ID: {$id}";
    }

        public function create()
    {
        return "Ini adalah halaman tambah siswa";
    }

    public function edit(string $id)
    {
        return "Ini adalah form mengedit siswa dengan ID: {$id}";
    }

    public function store()
    {
        return "Ini adalah halaman penambahan data siswa";
    }

    public function update(string $id)
    {
        return "Ini adalah halaman mengubah data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Ini adalah halaman menghapus data siswa dengan ID: {$id}";
    }

}