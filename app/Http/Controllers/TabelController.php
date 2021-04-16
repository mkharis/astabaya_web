<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tabel;

class TabelController extends Controller
{
    public function get(Request $request)
    {
        $tabel = Tabel::select(['id', 'tabel', 'link'])
                ->where('sub_kategori_id', $request->sub_kategori_id)
                ->get();

        $data['tabel'] = $tabel;

        return response()->json([
            'message' => 'Data berhasil diambil',
            'data' => $data
        ]);
    }

    public function delete(Request $request)
    {
        Tabel::destroy($request->id);

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    public function insert(Request $request)
    {
        $tabel = Tabel::create([
            'tabel' => $request->tabel,
            'link' => $request->link,
            'sub_kategori_id' => $request->sub_kategori_id
        ]);

        $data['tabel'] = $tabel;

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $tabel = Tabel::find($request->id);
        $tabel->update([
            'tabel' => $request->tabel,
            'link' => $request->link
        ]);

        $data['tabel'] = $tabel;

        return response()->json([
            'message' => 'Data berhasil diperbaruhi',
            'data' => $data
        ]);
    }
}
