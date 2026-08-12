<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
         $title = 'Sistem Sekolah - Edit Kelas';
         $majors = [
            [
                'id' => 1,
                'name' => 'Akuntansi dasar',
            ],
            [
                'id' => 2,
                'name' => 'Jaringan Komputer',
            ],
        ];
        $teachers = [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
            ],
        ];
        return view ('classes.edit', [
            'title' => $title,
            'majors' => $majors,
            'teachers' => $teachers
        ]);
    }
}
