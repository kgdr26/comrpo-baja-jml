<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Menu'
        ];

        return view('Menu.list',$data);
    }
}
