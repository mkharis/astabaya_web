<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Beranda;

class BerandaController extends Controller
{
    public function get(Request $request)
    {
        $beranda = Beranda::get();
        
        return view('beranda', compact(['beranda']));
    }

    public function remove(Request $request)
    {
        Beranda::destroy($request->id);

        return redirect()->route('beranda');
    }

    public function add(Request $request)
    {
        Beranda::create([
            'ikon' => $request->ikon,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'satuan' => $request->satuan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('beranda');
    }

    public function edit(Request $request)
    {
        $beranda = Beranda::find($request->id);
        $beranda->update([
            'ikon' => $request->ikon,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'satuan' => $request->satuan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('beranda');
    }
}
