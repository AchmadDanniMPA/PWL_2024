<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamay De Datang Di';
    }
    public function about(){
        return 'Nama Achmad Danni Muchtarom Putra Alamsyah<br>NIM 2241760095';
    }
    public function articles($id){
        return 'Halaman Artikel ini Dengan ID-'.$id;
    }
}
