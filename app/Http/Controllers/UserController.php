<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $username = $request->username;
        $nama = $request->nama;
        $nohp = $request->nohp;
        $password = Hash::make($request->password);

        $user = User::create([
            'username' => $username,
            'password' => $password,
            'nohp' => $nohp,
            'nama' => $nama
        ]);

        return response()->json(['message' => 'Pendaftaran pengguna berhasil']);
    }
}