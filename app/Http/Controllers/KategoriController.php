<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function get(Request $request)
    {
        $kategori = Kategori::select(['id', 'kategori'])
                ->get();

        $data['kategori'] = $kategori;

        return response()->json([
            'message' => 'Data berhasil diambil',
            'data' => $data
        ]);
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
