<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tentang extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Tentang'
        ];

        return view('Tentang.list',$data);
    }
}
