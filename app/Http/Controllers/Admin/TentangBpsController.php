<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TentangBpsController extends Controller
{
    public function getInfo(Request $request)
    {
        
        
        return view('kategori', compact(['kategori', 'subkategori']));
    }
}
