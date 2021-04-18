<?php

namespace App\Http\Controllers\Api;

use Input;
use App\kuis;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    public function list() {  
        $kuis = kuis::all();

        $response['data'] = $materi;
        $response['success'] = true;
        
        return response()->json($response);
    }
}