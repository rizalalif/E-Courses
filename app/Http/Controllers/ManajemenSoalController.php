<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenSoalController extends Controller
{
    public function index()
    {
        return view('admin.soal.index');
    }
    public function show(string $soal)
    {
        return view('admin.soal.show');
    }
}
