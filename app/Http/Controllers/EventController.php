<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class EventController extends Controller
{
    public function data_event()
    {   
        $s['event'] = \App\kegiatan::all();
        return view('admin.event.data_event')->with($s);
    }  

    public function input_event()
    {
        $s['event'] = \App\jenis_kegiatan::all();
        return view('admin.event.input_event')->with($s);
    }

    public function input(Request $r)
    {
        // // echo \Carbon\Carbon::now();
        // echo 

        // die();
        $s = new \App\kegiatan;
        $s->nama_kegiatan = Input::get('nama_kegiatan');
        $s->jenis_kegiatan = Input::get('jenis_kegiatan');
        $s->tanggal_kegiatan = \Carbon\Carbon::parse(Input::get('tanggal_kegiatan'))->format('y-m-d');
        $s->tanggal = date("y-m-d");
        $s->deskripsi_kegiatan = Input::get('deskripsi_kegiatan');
        $s->save();
        return redirect(url('/admin/event/data_event'));    
    }

    public function update_event($id)
    {
        $s['event'] = \App\kegiatan::find($id);
        $s['event1'] = \App\jenis_kegiatan::all();
        return view('admin.event.update_event')->with($s);
    }

    public function update()
    {   
        $id = Input::get('id_keg');
    	$s = \App\kegiatan::find($id);
    	$s->nama_kegiatan = Input::get('nama_kegiatan');
    	$s->jenis_kegiatan = Input::get('jenis_kegiatan');
    	$s->tanggal_kegiatan = \Carbon\Carbon::parse(Input::get('tanggal_kegiatan'))->format('D, d M Y');
        $s->tanggal = date("D, d M Y");
        $s->deskripsi_kegiatan = Input::get('deskripsi_kegiatan');
    	$s->save();
    	return redirect(url('/admin/event/data_event'));	
    }

    public function delete_event($id)
    {
        \App\kegiatan::destroy($id);
        return redirect('/admin/event/data_event');
    }
}
