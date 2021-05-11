<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AkunController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function get(Request $request)
    {
        $user = User::select('id', 'name', 'email', 'password', 'role')->get();

        return view('akun', compact('user'));
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'email' => "required|email",
            'password' => 'required|min:6|alpha_num',
            'roleadd' => ['required', Rule::in(['super_admin', 'admin'])]
        ]);

        $user = User::create([
            "name" => $request->nama,
            "email" => $request->email,
            "password" => app('hash')->make($request->password),
            "role" => $request->roleadd
        ]);

        return response()->json([
            "Message" => "User berahasil ditambahkan",
            "user" => $user
        ]);
    }

    public function edit(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'email' => "required|email",
            'roleedit' => ['required', Rule::in(['super_admin', 'admin'])]
        ]);

        $user = User::find($request->id);
        $user->update([
            "name" => $request->nama,
            "email" => $request->email,
            "role" => $request->roleedit
        ]);

        return response()->json([
            "Message" => "Data Akun berhasil diperbaruhi",
            "user" => $user
        ]);
    }

    public function remove(Request $request)
    {
        $user = User::destroy($request->id);

        return response()->json([
            "Message" => "User berahasil dihapus",
            "user" => $user
        ]);
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|alpha_num',
        ]);

        $user = User::find($request->id);
        $user->update([
            "password" => app('hash')->make($request->password),
        ]);

        return response()->json([
            "Message" => "Password berhasil diperbaruhi",
            "user" => $user
        ]);
    }
}
