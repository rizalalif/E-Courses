<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTransactionController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
}
