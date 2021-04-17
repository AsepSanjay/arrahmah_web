<?php

namespace App\Http\Controllers\Api;

use Input;
use App\materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function list() {  
        $materi = materi::all();

        $response['data'] = $materi;
        $response['success'] = true;
        
        return response()->json($response);
    }
}