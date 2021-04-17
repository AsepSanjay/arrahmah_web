<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemaMateriController extends Controller
{
     public function tema_materi()
    {   
        $s['tema_materi'] = \App\tema_materi::all();
        return view('admin.materi.tema_materi')->with($s);
    }  

}
