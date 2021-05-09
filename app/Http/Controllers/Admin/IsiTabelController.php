<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\IsiTabel;

class IsiTabelController extends Controller
{
    public function remove(Request $request)
    {
        IsiTabel::where('tabel_id', '=', $request->tabel_id)->delete();

        return redirect()->route('tabel', ['subKategori' => $request->sub_kategori_id]);
    }

    public function add(Request $request)
    {
        Http::asForm()->post('http://localhost:5000/isi_tabel', [
            'tabel_id' => $request->tabel_id,
            'sub_kategori_id' => $request->sub_kategori_id
        ]);

        return redirect()->route('tabel', ['subKategori' => $request->sub_kategori_id]);
    }
}
