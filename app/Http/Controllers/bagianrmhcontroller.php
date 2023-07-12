<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $bagianrmh= \DB::table('t_bagian_rmh')->get();
        $data = array('bagianrmh' => $bagianrmh);
        return view ('bagianrmh/index', $data);
    }
}
