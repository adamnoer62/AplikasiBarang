<?php

namespace App\Http\Controllers;
use App\Models\produk;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $produks = produk::all();
        return view('welcome', ['produks' => $produks]);
        
    }
}
