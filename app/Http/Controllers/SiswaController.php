<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    function index(){
        return "<h1>Saya Siswa dari Controller</h1>";
    }

    function detail($id){
        return "<h1>Saya Siswa dari Controller dengan ID $id</h1>";
    }
}
