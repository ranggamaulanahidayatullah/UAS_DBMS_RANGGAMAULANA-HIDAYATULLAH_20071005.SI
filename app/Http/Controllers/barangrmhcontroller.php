<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $barangrmh= \DB::table('t_barang_rmh')->get();
        $data = array('barangrmh' => $barangrmh);
        return view ('barangrmh/index', $data);
    }
}
