<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Layanan extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Layanan'
        ];

        return view('Layanan.list',$data);
    }
}
