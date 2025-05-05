<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Galeri extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Galeri'
        ];

        return view('Galeri.list',$data);
    }
}
