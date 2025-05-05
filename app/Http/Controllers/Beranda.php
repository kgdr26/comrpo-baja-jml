<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Beranda'
        ];

        return view('Beranda.list',$data);
    }
}
