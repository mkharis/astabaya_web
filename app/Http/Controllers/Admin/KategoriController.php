<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SubKategori;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function getKategori(Request $request)
    {
        $kategori = Kategori::select(['id', 'kategori'])
                ->get();

        $subkategori = SubKategori::select('sub_kategori.id', 'sub_kategori', 'link', 'kategori', 'kategori_id')
                ->join('kategori', 'sub_kategori.kategori_id', '=', 'kategori.id')
                ->get();
                
        return view('kategori', compact(['kategori', 'subkategori']));
    }

    public function delete(Request $request)
    {
        Kategori::destroy($request->id);

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    public function insert(Request $request)
    {
        $kategori = Kategori::create([
            'kategori' => $request->kategori,
        ]);

        $data['kategori'] = $kategori;

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $kategori = Kategori::find($request->id);
        $kategori->update([
            'kategori' => $request->kategori,
        ]);

        $data['kategori'] = $kategori;

        return response()->json([
            'message' => 'Data berhasil diperbaruhi',
            'data' => $data
        ]);
    }
}
