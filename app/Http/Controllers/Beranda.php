<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Beranda extends Controller
{
    public function index()
    {

        $arr    = DB::table('mst_beranda')->where('id', 1)->first();
        $data = [
            'title' => 'Beranda',
            'arr'   => $arr
        ];

        return view('Beranda.list',$data);
    }
}
