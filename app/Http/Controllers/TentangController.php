<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;

class TentangController extends Controller
{
    public function get()
    {
        $info = Tentang::select('id','isi')
                ->where('info', 'Informasi Umum')
                ->get();
        $data['info'] = $info;

        $visi = Tentang::select('id','isi')
                ->where('info', 'visi')
                ->get();
        $data['visi'] = $visi;

        $misi = Tentang::select('id','isi')
                ->where('info', 'misi')
                ->get();
        $data['misi'] = $misi;

        $alamat = Tentang::select('id','isi')
                ->where('info', 'alamat')
                ->get();
        $data['alamat'] = $alamat;
        
        $telepon = Tentang::select('id','isi')
                ->where('info', 'telepon')
                ->get();
        $data['telepon'] = $telepon;

        $fax = Tentang::select('id','isi')
                ->where('info', 'fax')
                ->get();
        $data['fax'] = $fax;
        
        $email = Tentang::select('id','isi')
                ->where('info', 'email')
                ->get();
        $data['email'] = $email;
        
        $website = Tentang::select('id','isi')
                ->where('info', 'website')
                ->get();
        $data['website'] = $website;
        
        $facebook = Tentang::select('id','isi')
                ->where('info', 'facebook')
                ->get();
        $data['facebook'] = $facebook;
        
        $instagram = Tentang::select('id','isi')
                ->where('info', 'instagram')
                ->get();
        $data['instagram'] = $instagram;
        
        $youtube = Tentang::select('id','isi')
                ->where('info', 'youtube')
                ->get();
        $data['youtube'] = $youtube;

        return response()->json([
            'message' => 'Data berhasil diambil',
            'data' => $data
        ]);
    }
}
