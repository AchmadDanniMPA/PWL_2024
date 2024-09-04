<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello World';
});

Route::get('/world', function(){
    return 'Za World';
});

Route::get('/selamatdatang', function(){
    return 'Selamay De Datang Di';
});

Route::get('/about', function(){
    return 'NIM 2241760095 <br> Nama Achmad Danni Muchtarom Putra Alamsyah';
});

Route::get('/user/{name?}',function($name=null){
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}',function($postId, $commentId){
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}',function($id){
    return 'Halaman Artikel dengan ID '.$id;
});
