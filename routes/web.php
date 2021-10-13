<?php

use Illuminate\Support\Facades\Route;

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

// route about
Route::get('about',function (){
    return '<h1>hello</h1>'
    .'<br>selamat datang di webapp saya'
    .'<br> laravel, emang keren';
});

route::get('profile', function (){
    $nama = "Muhamad Alliyul Alim";
    return "nama saya adalah <b>$nama</b>";

});
//route parameter 
route::get('post/{id}', function ($a){
    return "Halaman post ke - <b>$a</b>";
});

route::get('bio/{nama}/{umur}/{alamat}', function($nama,$umur,$alamat){
    return "<h1>Biodata Saya</h1>"
    ."Nama : $nama"
    . "<br>Umur : $umur"
    . "<br>Alamat : $alamat" ;
});

//route optional parameter 
route::get('page/{page?}', function ($hal =1){
    return "halaman <b>$hal</b>";
});

//route optional parameter
route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ( $a = null, $b = null, $c= null){
    if ($a == null && $b == null && $c == null ){
        $pesan = "Anda tidak pesan, silahkan pulang";
    }
    if ($a != null){
        $pesan = "Anda Memesan"
        . "<br> Makan : <b>$a</b>";
    }
    if ($a != null && $b != null){
        $pesan = "Anda Memesan"
        . "<br> Makan : <b>$a</b>"
        . "<br> Minuum : <b>$b</b>"; 
    }
    if ($a != null && $b != null && $c != null){
        $pesan = "Anda Memesan"
        . "<br> Makan : <b>$a</b>"
        . "<br> Minum : <b>$b</b>"
        . "<br> Cemilan : <b>$c</b>";
       
    }
     return " <b>$pesan</b>";
}); 