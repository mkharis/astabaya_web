<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Kategori extends Controller
{
    public function get()
    {
        $kategori = DB::select('SELECT id, kategori FROM kategori');

        return response()->json(['kategori' => $kategori]);
    }
}
