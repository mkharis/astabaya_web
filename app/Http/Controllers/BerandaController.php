<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Beranda;

class BerandaController extends Controller
{
    public function get()
    {
        $beranda = Beranda::select(['id', 'judul', 'isi', 'satuan', 'deskripsi'])
                ->get();

        $data['beranda'] = $beranda;

        return response()->json([
            'message' => 'Data berhasil diambil',
            'data' => $data
        ]);
    }

    public function delete(Request $request)
    {
        Beranda::destroy($request->id);

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    public function insert(Request $request)
    {
        $beranda = Beranda::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'satuan' => $request->satuan,
            'deskripsi' => $request->deskripsi,
        ]);

        $data['beranda'] = $beranda;

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $beranda = Beranda::find($request->id);
        $beranda->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'satuan' => $request->satuan,
            'deskripsi' => $request->deskripsi,
        ]);

        $data['beranda'] = $beranda;

        return response()->json([
            'message' => 'Data berhasil diperbaruhi',
            'data' => $data
        ]);
    }
}
