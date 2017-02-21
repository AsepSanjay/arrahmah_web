<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class ArtikelController extends Controller
{
    public function data_artikel()
    {   
        $s['artikel'] = \App\artikel::all();
        return view('admin.artikel.data_artikel')->with($s);
    } 

    public function input_artikel()
    {
    	return view('admin.artikel.input_artikel');
    }
   
    public function input(Request $r)
    {
    	$s = new \App\artikel;
    	$s->judul = Input::get('judul');
    	$s->content = Input::get('content');
    	$foto = strtoupper(str_slug(strtoupper(Input::get('name'))))."-".date("YmdHis").uniqid().".".Input::file('foto')->getClientOriginalExtension();
			Input::file('foto')->move(storage_path("foto"),$foto);
			$s->foto = $foto;
    	date_default_timezone_set('Asia/Jakarta');
    	$s->tanggal = date("D, d M Y");
    	$s->save();
    	return redirect(url('/admin/artikel/data_artikel'));	
    }

    public function update_artikel($id)
    {
        $s['artikel'] = \App\artikel::find($id);
        return view('admin.artikel.update_artikel')->with($s);
    }

    public function update()
    {
    $s = \App\artikel::find(Input::get('id'));
    	$s->judul = Input::get('judul');
    	$s->content = Input::get('content');
    	if(Input::file('foto')==''){
        
            }
            else{
            $foto = strtoupper(str_slug(strtoupper(Input::get('name'))))."-".date("YmdHis").uniqid().".".Input::file('foto')->getClientOriginalExtension();
            Input::file('foto')->move(storage_path("foto"),$foto);
            $s->foto = $foto;
            }
        date_default_timezone_set('Asia/Jakarta');
        $s->tanggal = date("D, d M Y");
    	$s->save();
    	return redirect(url('admin/artikel/data_artikel'));	
    }

    public function read($id)
    {
        $s['artikel'] = \App\artikel::find($id);
        return view('admin.artikel.read')->with($s);
    }

    public function delete_artikel($id)
    {
        \App\artikel::destroy($id);
        return redirect('admin/artikel/data_artikel');
    }

    
}
