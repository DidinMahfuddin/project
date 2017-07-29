<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
	return '<h1>Hallo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});

Route::get('latihan', function(){
	return view('about');
});

Route::get('/about/1', function(){
	return view('about.satu');
});

Route::get('/about/2', function(){
	return view('about.dua');
});

Route::get('/about/3', function(){
	return view('about.tiga');
});

Route::get('/about/{halaman}', function($id){
	return 'Halaman'.$id;
});

Route::get('/Siswa/{nama}/{sekolah}/{umur}', function($a,$b,$c){
	return 'Nama : '.$a.'<br> Sekolah : '.$b.'<br> Umur : '.$c;
});

Route::get('/nama/{john}', function(){
	$id='john';
	return 'Ini Halaman about '.$id;
});

Route::get('testmodel', function(){
	$a = App\Post::all();
	return $a;
});

Route::get('testmodel1', function(){
	$a = App\Post::find(1);
	return $a;
});

Route::get('testmodel2', function(){
	$a = App\Post::where('title','like','%Ciri Keluarga Sakinah%')->get();
	return $a;
});

Route::get('testmodel3', function(){
	$a = App\Post::find(1);
	$a->title="Ciri Keluarga Sakinah";
	$a->save();
	return $a;
});

Route::get('testmodel4', function(){
	$a = App\Post::find(1);
	$a->delete();
});

Route::get('testmodel5', function(){
	$a = new App\Post;
	$a->title="7 amalan pembuka jodoh";
	$a->content="shalat malam,sedekah,puasa";
	$a->save();
	return $a;
});

Route::get('cektampilan', function(){
	return view('layouts.master');
});

Route::get('/orangtua', function(){
	$ortu = App\ortu::all();
	foreach ($ortu as $key) {
		echo $key->nama_ayah;
		echo " dengan ";
		echo $key->nama_ibu;
		echo " mempunyai anak ";
		foreach ($key->siswa as $data) {
			echo "<li>".$data->nama."</li>";
			echo "<hr>";
		}
	}
});

Route::get('/coba', 'MyController@index');
Route::get('/coba1', 'MyController@tampilmodel');
Route::get('/coba2', 'MyController@tampilview');
Route::get('/coba3', 'MyController@percobaan');