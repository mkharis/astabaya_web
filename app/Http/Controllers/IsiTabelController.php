<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\IsiTabel;

class IsiTabelController extends Controller
{
    public function get(Request $request)
    {
        $isiTabel = IsiTabel::select(['id', 'series', 'isi_tabel'])
                ->where('tabel_id', $request->tabel_id)
                ->get();

        $data['isi_tabel'] = $isiTabel;

        return response()->json([
            'message' => 'Data berhasil diambil',
            'data' => $data
        ]);
    }

    public function delete(Request $request)
    {
        IsiTabel::destroy($request->id);

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    public function insert(Request $request)
    {
        $isiTabel = IsiTabel::create([
            'series' => $request->series,
            'isi_tabel' => $request->isi_tabel,
            'tabel_id' => $request->tabel_id
        ]);

        $data['isi_tabel'] = $isiTabel;

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $isiTabel = IsiTabel::find($request->id);
        $isiTabel->update([
            'series' => $request->series,
            'isi_tabel' => $request->isi_tabel
        ]);

        $data['isi_tabel'] = $isiTabel;

        return response()->json([
            'message' => 'Data berhasil diperbaruhi',
            'data' => $data
        ]);
    }
}
