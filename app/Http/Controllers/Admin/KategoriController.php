<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SubKategori;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function get(Request $request)
    {
        $kategori = Kategori::select(['id', 'kategori'])
                ->get();

        $subkategori = SubKategori::select('sub_kategori.id', 'sub_kategori', 'link', 'kategori', 'kategori_id')
                ->join('kategori', 'sub_kategori.kategori_id', '=', 'kategori.id')
                ->get();
                
        return view('kategori', compact(['kategori', 'subkategori']));
    }

    public function remove(Request $request)
    {
        Kategori::destroy($request->id);

        return redirect()->route('kategori');
    }

    public function add(Request $request)
    {
        $kategori = Kategori::create([
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('kategori');
    }

    public function edit(Request $request)
    {
        $kategori = Kategori::find($request->id);
        $kategori->update([
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('kategori');
    }

    public function addSub(Request $request) {
        SubKategori::create([
            'sub_kategori' => $request->sub_kategori,
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect()->route('kategori');
    }

    public function editSub(Request $request)
    {
        $subKategori = SubKategori::find($request->id);

        $subKategori->update([
            'kategori_id' => $request->kategori_id,
            'sub_kategori' => $request->subKategori,
        ]);

        return redirect()->route('kategori');
    }

    public function removeSub(Request $request)
    {
        SubKategori::destroy($request->id);

        return redirect()->route('kategori');
    }
}
