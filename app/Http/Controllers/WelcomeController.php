<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class WelcomeController extends Controller
{
    public function welcome_artikel()
    {
        if(Auth::check()){
            return  view('admin.admin');
        }
        else{
    	$s['artikel_all'] = \App\artikel::all();
        $s['artikel'] = \App\artikel::orderBy('id','desc')->take(2)->get();
        $s['event'] = \App\kegiatan::paginate(4);
        $s['gallery'] = \App\gallery::all();
        return view('welcome')->with($s);
    }   
    }

    public function welcome_artikel_all()
    {
    	$s['artikel_all'] = \App\artikel::paginate(4);
        return view('welcome_blog')->with($s);
    }

      public function read($id)
    {
        $s = array('s'=>\App\artikel::find($id));
        $s['artikel_all'] = \App\artikel::all();
        return view('welcome_blog_read')->with($s);
    }

    public function welcome_gallery()
    {   
        $s['gallery'] = \App\gallery::paginate(4);
        return view('welcome_gallery')->with($s);
    } 

    public function welcome_event()
    {   
        $s['event'] = \App\kegiatan::paginate(4);
        $s['kegiatan'] = \App\jenis_kegiatan::all();
        return view('welcome_event')->with($s);
    } 
    public function event($nama_keg)
    {
        $s['event'] = \App\kegiatan::where('jenis_kegiatan',$nama_keg)->paginate(4);
        $s['kegiatan'] = \App\jenis_kegiatan::all();
        return view('welcome_event')->with($s);
    }
}
