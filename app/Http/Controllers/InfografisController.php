<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infografis;

class InfografisController extends Controller
{
    public function get(Request $request)
    {
        $infografis = Infografis::select(['id', 'judul', 'file_path'])->get();

        $data['infografis'] = $infografis;

        return response()->json([
            'message' => 'Infografis berhasil diambil',
            'data' => $data
        ],200, [], JSON_UNESCAPED_SLASHES);
    }

    public function delete(Request $request)
    {
        Infografis::destroy($request->id);

        return response()->json(['message' => 'Infografis berhasil dihapus']);
    }

    public function insert(Request $request)
    {
        $infografis = Infografis::create([
            'judul' => $request->judul,
            'file_path' => $request->file_path,
        ]);

        $data['infografis'] = $infografis;

        return response()->json([
            'message' => 'Infografis berhasil ditambahkan',
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $infografis = Infografis::find($request->id);
        $infografis->update([
            'judul' => $request->judul,
            'file_path' => $request->file_path,
        ]);

        $data['infografis'] = $infografis;

        return response()->json([
            'message' => 'Infografis berhasil diperbaruhi',
            'data' => $data
        ]);
    }
}
