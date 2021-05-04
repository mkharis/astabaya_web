<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Infografis;

class InfografisController extends Controller
{
    public function get()
    {
        $infografis = Infografis::get();

        return view('infografis', compact(['infografis']));
    }

    public function add(Request $request)
    {
        $infografis = Infografis::create([
            'judul' => $request->judul,
            'file_path' => $request->link,
        ]);
        // if ($request->hasFile('image')) {
        //     $original_filename = $request->file('image')->getClientOriginalName();
        //     $original_filename_arr = explode('.', $original_filename);
        //     $file_name = reset($original_filename_arr);
        //     $file_ext = end($original_filename_arr);
        //     $destination_path = './images/infografis/';
        //     $image = 'infografis-' . $file_name . '.' . $file_ext;

        //     if ($request->file('image')->move($destination_path, $image)) {
        //         $infografis = Infografis::create([
        //             'judul' => $request->judul,
        //             'file_path' => 'images/infografis/' . $image,
        //         ]);
        //         // return $this->responseRequestSuccess($user);
        //     } else {
        //         // return $this->responseRequestError('Cannot upload file');
        //     }
        // } else {
        //     // return $this->responseRequestError('File not found');
        // }

        return redirect()->route('infografis');
    }

    public function remove(Request $request)
    {
        $infografis = Infografis::find($request->id);
        Infografis::destroy($request->id);
        
        // if (File::exists($infografis->file_path)) {
        //     File::delete($infografis->file_path);

        //     Infografis::destroy($request->id);
        // }

        return redirect()->route('infografis');
    }

    public function edit(Request $request)
    {
        $infografis = Infografis::where('id',$request->id);
        
        $infografis->update([
            'judul' => $request->judul,
            'file_path' => $request->link,
        ]);

        return redirect()->route('infografis');
    }
}
