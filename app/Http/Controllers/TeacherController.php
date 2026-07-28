<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
{
    return "Menampilkan daftar guru";
}

public function create()
{
    return "Menampilkan form tambah guru";
}

public function store()
{
    return "Menyimpan data guru baru";
}

public function show(string $id)
{
    return "Menampilkan guru dengan ID: {$id}";
}

public function edit(string $id)
{
    return "Menampilkan form edit guru dengan ID: {$id}";
}

public function update(string $id)
{
    return "Mengupdate data guru dengan ID: {$id}";
}

public function destroy(string $id)
{
    return "Menghapus guru dengan ID: {$id}";
}
}
