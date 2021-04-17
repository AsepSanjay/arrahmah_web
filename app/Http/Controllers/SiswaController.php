<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class SiswaController extends Controller
{
     

    public function data_siswa()
    {   
        $s['siswa'] = \App\siswa::all();
        return view('admin.siswa.data_siswa')->with($s);
    } 

    public function input_siswa()
    {
        return view('admin.siswa.input_siswa');
    }

    public function input(Request $r)
    {
    	$s = new \App\siswa;
        $s->nama = Input::get('nama');
        $s->kelas = Input::get('kelas');
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
    	return redirect(route('data_siswa'));	
    }

    public function update_siswa($id)
    {
    	$s['siswa'] = \App\siswa::find($id);
        return view('admin.siswa.update_siswa')->with($s);
    }


    public function update()
    {
    	$s = \App\siswa::find(Input::get('id'));
    	$s->nama = Input::get('nama');
        $s->kelas = Input::get('kelas');
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
    	return redirect(route('data_siswa'));	
    }

    public function delete_siswa($id)
    {
        \App\siswa::destroy($id);
        return redirect(route('data_siswa'));
    }

    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('/');
        exit();
    }

}
