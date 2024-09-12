<?php

namespace App\Http\Controllers;

use App\Models\KategoriPaket;
use App\Models\Paket;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $username = 'Anonymous User';
        $categories = KategoriPaket::latest()->get();
        $pakets = Paket::paginate(4);


        return view('user.home', compact('username', 'categories', 'pakets'));
    }

    public function paketDetail($id)
    {
        $paket = Paket::findOrFail($id);

        $viewDiscount = $paket->price - $paket->price * $paket->discount;

        // dd($paket);
        return view('user.detail-paket', compact('paket', 'viewDiscount'));
    }
}
