<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class MateriController extends Controller
{
    

    public function data_materi()
    {   
        $s['materi'] = \App\materi::all();
        return view('admin.materi.data_materi')->with($s);
    } 

    public function data_tema()
    {   
        $s['materi'] = \App\tema_materi::all();
        return view('admin.materi.tema_materi')->with($s);
    } 

    public function input_materi()
    {
        $s['materi'] = \App\tema_materi::all();
    	return view('admin.materi.input_materi')->with($s);
    }

    public function input_tema()
    {
        $s['materi'] = \App\tema_materi::all();
        return view('admin.materi.input_tema_materi')->with($s);
    }

    public function input_tema_materi()
    {
        $s = new \App\tema_materi;
        $s->tema_materi = Input::get('tema_materi');
        date_default_timezone_set('Asia/Jakarta');
        $s->save();
        return redirect(url('/admin/materi/tema_materi'));
    }
   
    public function input(Request $r)
    {
    	$s = new \App\materi;
        $s->nama_admin = Input::get('nama_admin');
    	$s->tema = Input::get('tema');
    	$s->video = Input::get('video');
    	date_default_timezone_set('Asia/Jakarta');
    	$s->tanggal = date("D, d M Y");
    	$s->save();
    	return redirect(url('/admin/materi/data_materi'));	
    }

    public function update_materi($id)
    {
        $s['materi'] = \App\materi::find($id);
        return view('admin.materi.update_materi')->with($s);
    }

    public function update()
    {
        $s = \App\materi::find(Input::get('id'));
        $s->nama_admin = Input::get('nama_admin');
    	$s->tema = Input::get('tema');
    	$s->video = Input::get('video');
        date_default_timezone_set('Asia/Jakarta');
        $s->tanggal = date("D, d M Y");
    	$s->save();
    	return redirect(url('admin/materi/data_materi'));	
    }

    public function update_tema_materi($id)
    {
        $s['materi'] = \App\tema_materi::find($id);
        return view('admin.materi.update_tema_materi')->with($s);   
    }

    public function update_tema()
    {
        $s = \App\tema_materi::find(Input::get('id'));
        $s->tema_materi = Input::get('tema_materi');
        date_default_timezone_set('Asia/Jakarta');
        $s->save();
        return redirect(url('/admin/materi/tema_materi'));
    }

    public function read($id)
    {
        $s['materi'] = \App\materi::find($id);
        return view('admin.materi.read')->with($s);
    }

    public function delete_materi($id)
    {
        \App\materi::destroy($id);
        return redirect('admin/materi/data_materi');
    }

    public function delete_tema_materi($id)
    {
        \App\tema_materi::destroy($id);
        return redirect('admin/materi/tema_materi');
    }

    
}
