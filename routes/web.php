<?php

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about',function() {
//	return '<h1>Halo</h1>'
//	.'Selamat datang di web app saya<br>'
//	.'Laravel, emang keren.';
//});
//
//Route::get('/about/2',function() {
//	return '<h1>Ini Halaman About ke-2</h1>';
//});

//Route::get('/about/3',function() {
//});

//Route::get('/about/4',function() {
//	return '<h1>Ini Halaman About ke-4</h1>';
//});

//Route::get('/about/5',function() {
//	return '<h1>Ini Halaman About ke-5</h1>';
//});

Route::get('/about/{page}', function($a){
	return 'ini halaman about <b>' .$a. '</b>';

});

Route::get('/kontak', function(){
	return view('kontak');

});


Route::get('/kantin/{makanan}/{minuman}/{cemilan}', function($b,$c,$d){
	return 'saya pesan bakso <b>' .$b. '</b><br>'
	 .'Minumnya susu <b>' .$c. '</b><br>'
	.'tambah cemilan <b>' .$d. '</b>';

});

//route opsional parameter

Route::get('user/{name?}',function($name = 'Hali'){
	return 'Nama saya  '. $name;
});