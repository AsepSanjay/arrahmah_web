<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class GalleryController extends Controller
{
	public function data_gallery()
    {   
        $s['gallery'] = \App\gallery::all();
        return view('admin.galeri.data_gambar')->with($s);
    }  

    public function input_gallery()
    {   
        $s['gallery'] = \App\gallery::all();
        return view('admin.galeri.input_gambar')->with($s);
    }  

    public function input(Request $r)
    {
    	$s = new \App\gallery;
    	$s->keterangan = Input::get('keterangan');
    	$foto = strtoupper(str_slug(strtoupper(Input::get('name'))))."-".date("YmdHis").uniqid().".".Input::file('foto')->getClientOriginalExtension();
			Input::file('foto')->move(storage_path("foto"),$foto);
			$s->foto = $foto;
    	date_default_timezone_set('Asia/Jakarta');
    	$s->tanggal_upload = date("D, d M Y");
    	$s->save();
    	return redirect(url('/admin/gallery/data_gallery'));	
    }

    public function delete_gallery($id)
    {
        \App\gallery::destroy($id);
        return redirect(route('data_gallery'));
    }

}
