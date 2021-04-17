<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Welcome
Route::get('/', 'LoginController@index');
Route::get('/artikel', 'WelcomeController@welcome_artikel_all');
Route::get('/artikel/read/{id}',['as'=>'read_art', 'uses'=>'WelcomeController@read']);
Route::get('/event/{nama_keg}',['as'=>'event', 'uses'=>'WelcomeController@event']);
Route::get('/kegiatan', 'WelcomeController@welcome_event');
Route::resource('posts', 'PostsController');



Route::get('file/{jenis}/{filename}', function ($jenis,$filename){
  $path = storage_path() . '/'.$jenis.'/' . $filename;
  $file = File::get($path);
  $type = File::mimeType($path);
  $response = Response::make($file);
  $response->header("Content-Type", $type);
  return $response;
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::get('/login', 'LoginController@index');

Route::post('/trylogin', ['as'=>'login','uses'=>'Auth\LoginController@tryLogin']);

//Materi
Route::get('/admin/materi/data_materi', 'MateriController@data_materi');
Route::get('/admin/materi/tema_materi', 'MateriController@data_tema');
Route::get('/admin/materi/input_materi', 'MateriController@input_materi');
Route::get('/admin/materi/input_tema_materi', 'MateriController@input_tema');
Route::get('/admin/materi/tema_materi/update/{id}',['as'=>'update_tema_materi', 'uses'=>'MateriController@update_tema_materi']);
Route::get('/admin/materi/data_materi/update/{id}',['as'=>'update', 'uses'=>'MateriController@update_materi']);
Route::get('admin/materi/{id}/destroy', 'MateriController@delete_materi');
Route::get('admin/materi/tema_materi/{id}/destroy', 'MateriController@delete_tema_materi');

Route::post('/save_tema_materi', 'MateriController@input_tema_materi');
Route::post('/save_edited_tema_materi', 'MateriController@update_tema');
Route::post('/save_materi', 'MateriController@input');
Route::post('/save_edited_materi', 'MateriController@update');

//Kuis
Route::get('/admin/kuis/data_kuis', 'KuisController@data_kuis');
Route::get('/admin/kuis/input_kuis', 'KuisController@input_kuis');
Route::get('admin/kuis/{id}/destroy', 'KuisController@delete_kuis');
Route::get('/admin/kuis/data_kuis/update/{id}',['as'=>'update_kuis', 'uses'=>'KuisController@update_kuis']);

Route::post('/save_kuis', 'KuisController@input');
Route::post('/save_edited_kuis', 'KuisController@update');

//Admin
Route::get('/admin/data_admin',['as'=>'data_admin','uses'=>'AdminController@data_admin']);
Route::get('/admin/input_admin',['as'=>'input_admin','uses'=>'AdminController@input_admin']);
Route::get('/admin/data_admin/update/{id}',['as'=>'update_admin', 'uses'=>'AdminController@update_admin']);
Route::get('admin/{id}/destroy',['as'=>'delete_admin','uses'=>'AdminController@delete_admin']);

Route::post('/save_admin', 'AdminController@input');
Route::post('/save_edited_admin',['as'=>'save_edited_admin','uses'=>'AdminController@update']);

//Tantangan
Route::get('/admin/tantangan/data_tantangan',['as'=>'data_tantangan','uses'=>'TantanganController@data_tantangan']);
Route::get('/admin/tantangan/input_tantangan',['as'=>'input_tantangan','uses'=>'TantanganController@input_tantangan']);
Route::get('/admin/tantangan/update/{id}',['as'=>'update_tantangan', 'uses'=>'TantanganController@update_tantangan']);
Route::get('admin/tantangany/{id}/destroy',['as'=>'delete_tantangan','uses'=>'TantanganController@delete_tantangan']);

Route::post('/save_tantangan', 'TantanganController@input');
Route::post('/save_edited_tantangan', 'TantanganController@update');

//Siswa
Route::get('/admin/data_siswa',['as'=>'data_siswa','uses'=>'SiswaController@data_siswa']);
Route::get('/admin/input_siswa',['as'=>'input_siswa','uses'=>'SiswaController@input_siswa']);
Route::get('/admin/data_siswa/update/{id}',['as'=>'update_siswa', 'uses'=>'SiswaController@update_siswa']);
Route::get('admin/{id}/destroy',['as'=>'delete_siswa','uses'=>'SiswaController@delete_siswa']);

Route::post('/save_siswa', 'SiswaController@input');
Route::post('/save_edited_siswa',['as'=>'save_edited_siswa','uses'=>'SiswaController@update']);


Route::get('/logout', 'AdminController@logout');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
