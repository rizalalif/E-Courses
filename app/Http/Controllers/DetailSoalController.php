<?php

namespace App\Http\Controllers;

use App\Models\Soal;
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
    public function show($id)
    {
        // dd($id);
        $soal = Soal::findOrFail($id);
        dd($soal);
        return view('admin.soal.show');
    }
}
