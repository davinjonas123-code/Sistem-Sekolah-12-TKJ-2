<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
{
    return "Displaying teacher list";
}

public function create()
{
    return "Displaying create teacher form";
}

public function store()
{
    return "Storing new teacher";
}

public function show(string $id)
{
    return "Displaying teacher with ID: {$id}";
}

public function edit(string $id)
{
    return "Displaying edit teacher form with ID: {$id}";
}

public function update(string $id)
{
    return "Updating teacher with ID: {$id}";
}

public function destroy(string $id)
{
    return "Deleting teacher with ID: {$id}";
}
}
