<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranitemrmh= \DB::table('t_pengeluaranitem_rmh')->get();
        $data = array('pengeluaranitemrmh' => $pengeluaranitemrmh);
        return view ('pengeluaranitemrmh/index', $data);
    }
}
