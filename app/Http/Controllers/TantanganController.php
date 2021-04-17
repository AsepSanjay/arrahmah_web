<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class TantanganController extends Controller
{
	public function data_tantangan()
    {   
        $s['tantangan'] = \App\tantangan::all();
        return view('admin.tantangan.data_tantangan')->with($s);
    }  

    public function input_tantangan()
    {   
        $s['tantangan'] = \App\tantangan::all();
        return view('admin.tantangan.input_tantangan')->with($s);
    }  

    public function input(Request $r)
    {
    	$s = new \App\tantangan;
    	$s->tema_tantangan = Input::get('tema_tantangan');
    	$s->judul_tantangan = Input::get('judul_tatangan');
        $s->deskripsi_tantangan = Input::get('deskripsi_tatangan');
    	$foto = strtoupper(str_slug(strtoupper(Input::get('name'))))."-".date("YmdHis").uniqid().".".Input::file('contoh_foto')->getClientOriginalExtension();
            Input::file('contoh_foto')->move(storage_path("contoh_foto"),$foto);
            $s->contoh_foto = $foto;
    	date_default_timezone_set('Asia/Jakarta');
    	$s->tenggat_waktu = date("D, d M Y");
    	$s->save();
    	return redirect(url('/admin/tantangan/data_tantangan'));	
    }
    public function update_tantangan($id)
    {
        $s['tantangan'] = \App\tantangan::find($id);
        return view('admin.tantangan.update_tantangan')->with($s);
    }

        public function update()
    {
        $s = \App\tantangan::find(Input::get('id'));
        $s->tema_tantangan = Input::get('tema_tantangan');
        $s->judul_tantangan = Input::get('judul_tatangan');
        $s->deskripsi_tantangan = Input::get('deskripsi_tatangan');
        $foto = strtoupper(str_slug(strtoupper(Input::get('name'))))."-".date("YmdHis").uniqid().".".Input::file('contoh_foto')->getClientOriginalExtension();
            Input::file('contoh_foto')->move(storage_path("contoh_foto"),$foto);
            $s->contoh_foto = $foto;
        date_default_timezone_set('Asia/Jakarta');
        $s->tenggat_waktu = date("D, d M Y");
        $s->save();
        return redirect(url('/admin/tantangan/data_tantangan'));
    }

    public function delete_tantangan($id)
    {
        \App\tantangan::destroy($id);
        return redirect(route('data_tantangan'));
    }

}