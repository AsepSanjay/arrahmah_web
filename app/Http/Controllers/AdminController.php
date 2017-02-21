<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.admin');
    }

    public function data_admin()
    {   
        $s['admin'] = \App\admin::all();
        return view('admin.akses.data_admin')->with($s);
    } 

    public function input_admin()
    {
        return view('admin.akses.input_admin');
    }

    public function input(Request $r)
    {
    	$s = new \App\admin;
        $s->nama = Input::get('nama');
    	$s->role_id = Input::get('role_id');
    	$s->tempat_lahir = Input::get('tempat_lahir');
    	$s->tanggal_lahir = date("D, d M Y");
    	$s->jenis_kelamin = Input::get('jenis_kelamin');
    	$s->alamat = Input::get('alamat');
    	$s->email = Input::get('email');
    	$s->password = bcrypt(Input::get('password'));
    	$s->no_telp = Input::get('no_telp');
    	$foto = strtoupper(str_slug(strtoupper(Input::get('name'))))."-".date("YmdHis").uniqid().".".Input::file('foto_profile')->getClientOriginalExtension();
			Input::file('foto_profile')->move(storage_path("foto_profile"),$foto);
			$s->foto_profile = $foto;
    	date_default_timezone_set('Asia/Jakarta');
    	
    	$s->save();
    	return redirect(route('data_admin'));	
    }

    public function update_admin($id)
    {
    	$s['admin'] = \App\admin::find($id);
        return view('admin.akses.update_admin')->with($s);
    }


    public function update()
    {
    	$s = \App\admin::find(Input::get('id'));
    	$s->nama = Input::	get('nama');
        $s->role_id = Input::get('role_id');
    	$s->tempat_lahir = Input::get('tempat_lahir');
    	$s->tanggal_lahir = date("D, d M Y");
    	$s->jenis_kelamin = Input::get('jenis_kelamin');
    	$s->alamat = Input::get('alamat');
    	$s->email = Input::get('email');
    	$s->password = bcrypt(Input::get('password'));
    	$s->no_telp = Input::get('no_telp');
    	if(Input::file('foto_profile')!=""){
    	$foto = strtoupper(str_slug(strtoupper(Input::get('name'))))."-".date("YmdHis").uniqid().".".Input::file('foto_profile')->getClientOriginalExtension();
			Input::file('foto_profile')->move(storage_path("foto_profile"),$foto);
			$s->foto_profile = $foto;
    	date_default_timezone_set('Asia/Jakarta');
    	}
    	$s->save();
    	return redirect(route('data_admin'));	
    }

    public function delete_admin($id)
    {
        \App\admin::destroy($id);
        return redirect(route('data_admin'));
    }

    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('/');
        exit();
    }

}
