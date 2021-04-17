<?php

namespace App\Http\Controllers\Api;

use Input;
use JWTAuth;
use App\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class RegisterController extends Controller
{
    public function register(Request $request) {
        
        $siswa = siswa::create([
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'no_telp' => $request->input('no_telp')            
        ]);
  
        return response()->json(compact('siswa'), 201); 
    }
}