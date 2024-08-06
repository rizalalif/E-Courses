<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailSoalController extends Controller
{
    public function index()
    {
        return view('admin.soal.index');
    }
    public function create()
    {
        return view('admin.soal.create');
    }
}
