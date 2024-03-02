<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { 
        return 'Selamat Datang'; 
    }
    
    public function about() { 
        return '2241720122 <br> Afrizal Dwi Septian'; 
    } 

    public function articles($id)
    {
        return 'Halaman dengan ID: '.$id;
    }
}