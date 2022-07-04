<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return "Halaman Umum";
    }

    public function hanyaAdmin(){
        return "Hanya Admin Yang Bisa Masuk";
    }

    public function formLogin(){
        return "Halaman Login Admin";
    }
}
