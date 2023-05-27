<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    function index(){
        $judul = 'Halaman Index';
        return view("halaman/index")->with('judul', $judul);
    }
    function tentang(){
        return view("halaman/tentang");
    }
    function kontak(){
        $data = [
            'judul' => 'Halaman Kontak',
            'kontak' => [
                'email' => 'ambadayaakun@gmail.com',
                'website' => 'vorkey.github.io'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
}
