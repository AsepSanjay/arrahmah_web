<?php

namespace App\Http\Controllers\Api;

use Input;
use App\tantangan;
use Illuminate\Http\Request;

class TantanganController extends Controller
{
    public function list() {  
        $tantangan = tantangan::all();

        $response['data'] = $materi;
        $response['success'] = true;
        
        return response()->json($response);
    }
}