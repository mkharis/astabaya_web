<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function get(Request $request)
    {
        $user = User::select('id', 'name', 'email', 'role')->get();

        return view('akun', compact('user'));
    }

    //
}
