<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tentang;

class TentangController extends Controller
{
    public function getInfo()
    {
        $info = Tentang::select('isi')
                ->where('info', 'Informasi Umum')
                ->get();
        $visi = Tentang::select('isi')
                ->where('info', 'visi')
                ->get();
        $misi = Tentang::select('isi')
                ->where('info', 'misi')
                ->get();
        $alamat = Tentang::select('isi')
                ->where('info', 'alamat')
                ->get();
        $telepon = Tentang::select('isi')
                ->where('info', 'telepon')
                ->get();
        $fax = Tentang::select('isi')
                ->where('info', 'fax')
                ->get();
        $email = Tentang::select('isi')
                ->where('info', 'email')
                ->get();
        $website = Tentang::select('isi')
                ->where('info', 'website')
                ->get();
        $facebook = Tentang::select('isi')
                ->where('info', 'facebook')
                ->get();
        $instagram = Tentang::select('isi')
                ->where('info', 'instagram')
                ->get();
        $youtube = Tentang::select('isi')
                ->where('info', 'youtube')
                ->get();

        return view('lainnya', compact([
            'info',
            'visi','misi',
            'alamat','telepon','fax','email',
            'website','facebook','instagram','youtube'
        ]));
    }

    public function updateInfo(Request $request)
    {
        $kategori = Tentang::where('info','Informasi Umum');
        
        $kategori->update([
            'isi' => $request->info,
        ]);

        return redirect()->route('lainnya');
    }

    public function updateVisiMisi(Request $request)
    {
        $visi = Tentang::where('info','Visi');
        $misi = Tentang::where('info','Misi');
        
        $visi->update([
            'isi' => $request->visi,
        ]);
        $misi->update([
            'isi' => $request->misi,
        ]);

        return redirect()->route('lainnya');
    }

    public function updateKontak(Request $request)
    {
        $alamat = Tentang::where('info', 'alamat');
        $alamat->update([
            'isi' => $request->alamat,
        ]);

        $telepon = Tentang::where('info', 'telepon');
        $telepon->update([
            'isi' => $request->telepon,
        ]);

        $fax = Tentang::where('info', 'fax');
        $fax->update([
            'isi' => $request->fax,
        ]);

        $email = Tentang::where('info', 'email');
        $email->update([
            'isi' => $request->email,
        ]);

        return redirect()->route('lainnya');
    }

    public function updateMedsos(Request $request)
    {
        $website = Tentang::where('info', 'website');
        $website->update([
            'isi' => $request->website,
        ]);

        $facebook = Tentang::where('info', 'facebook');
        $facebook->update([
            'isi' => $request->facebook,
        ]);

        $instagram = Tentang::where('info', 'instagram');
        $instagram->update([
            'isi' => $request->instagram,
        ]);

        $youtube = Tentang::where('info', 'youtube');
        $youtube->update([
            'isi' => $request->youtube,
        ]);

        return redirect()->route('lainnya');
    }
}
