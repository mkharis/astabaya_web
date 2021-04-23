<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SubKategori;

class SubKategoriController extends Controller
{
    public function get(Request $request)
    {
        $subKategori = Tabel::select(['id', 'sub_kategori', 'link'])
                ->where('kategori_id', $request->kategori_id)
                ->get();

        $data['sub_kategori'] = $subKategori;

        return response()->json([
            'message' => 'Data berhasil diambil',
            'data' => $data
        ]);
    }

    public function delete(Request $request)
    {
        SubKategori::destroy($request->id);

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    public function insert(Request $request)
    {
        $subKategori = SubKategori::create([
            'sub_kategori' => $request->sub_kategori,
            'link' => $request->link,
            'kategori_id' => $request->kategori_id
        ]);

        $data['sub_kategori'] = $subKategori;

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $subKategori = SubKategori::find($request->id);
        $subKategori->update([
            'sub_kategori' => $request->sub_kategori,
            'link' => $request->link
        ]);

        $data['sub_kategori'] = $subKategori;

        return response()->json([
            'message' => 'Data berhasil diperbaruhi',
            'data' => $data
        ]);
    }
}
