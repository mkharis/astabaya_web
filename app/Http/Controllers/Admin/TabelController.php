<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SubKategori;
use App\Models\Tabel;

class TabelController extends Controller
{
    public function get(Request $request, $subKategori)
    {
        $tabel = Tabel::select('tabel.id', 'tabel', 'tabel.link', 'sub_kategori', 'sub_kategori_id')
                ->join('sub_kategori', 'tabel.sub_kategori_id', '=', 'sub_kategori.id')
                ->where('sub_kategori_id', $subKategori)
                ->get();
                
        return view('tabel', compact(['tabel']));
    }
}
