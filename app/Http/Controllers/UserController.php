<?php

namespace App\Http\Controllers;

use App\Models\KategoriPaket;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $username = 'Anonymous User';
        $categories = KategoriPaket::latest()->get();

        return view('user.home', compact('username', 'categories'));
    }
}
