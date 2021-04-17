<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class KuisController extends Controller
{

    //Hitung Kuis
    public function hitung_kuis()
    {
        $kuis = kuis::count($id);
        return view('admin.kuis.data_kuis', compact('kuis'));
    }

    public function data_kuis()
    {   
        $s['kuis'] = \App\kuis::all();
        return view('admin.kuis.data_kuis')->with($s);
    }  

    public function input_kuis()
    {
        $s['kuis'] = \App\tema_materi::all();
        return view('admin.kuis.input_kuis')->with($s);
    }

    public function input(Request $r)
    {
        // // echo \Carbon\Carbon::now();
        // echo 

        // die();
        $id = Input::get('id_keg');
        $s = new \App\kuis;
        $s->tema_kuis = Input::get('tema_kuis');
        $s->soal = Input::get('soal');
        $s->jawaban_a = Input::get('jawaban_a');
        $s->jawaban_b = Input::get('jawaban_b');
        $s->jawaban_c = Input::get('jawaban_c');
        $s->jawaban_d = Input::get('jawaban_d');
        $s->jawaban_e = Input::get('jawaban_e');
        $s->jawaban_benar = Input::get('jawaban_benar');
        $s->tanggal = date("y-m-d");
        $s->save();
        return redirect(url('/admin/kuis/data_kuis'));    
    }

    public function update_kuis($id)
    {
        $s['materi'] = \App\kuis::find($id);
        $s['materi1'] = \App\materi::all();
        return view('admin.kuis.update_kuis')->with($s);
    }

    public function kuis()
    {   
      	$s->tema_kuis = Input::get('tema_kuis');
        $s->soal = Input::get('soal');
        $s->jawaban_a = Input::get('jawaban_a');
        $s->jawaban_b = Input::get('jawaban_b');
        $s->jawaban_c = Input::get('jawaban_c');
        $s->jawaban_d = Input::get('jawaban_d');
        $s->jawaban_e = Input::get('jawaban_e');
        $s->jawaban_benar = Input::get('jawaban_benar');
        $s->tanggal = date("y-m-d");
    	$s->save();
    	return redirect(url('/admin/kuis/data_kuis'));	
    }

    public function delete_kuis($id)
    {
        \App\kuis::destroy($id);
        return redirect('/admin/kuis/data_kuis');
    }
}

