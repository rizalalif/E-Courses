<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Soal;
use Illuminate\Http\Request;

class ManajemenSoalController extends Controller
{
    public function index()
    {
        $soal = Soal::all();
        $paket = Paket::select('id', 'name')->get();
        return view('admin.soal.index', compact('soal',"paket"));
    }
    public function show(string $soal)
    {
        return view('admin.soal.show');
    }
}
