<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranrmh= \DB::table('t_pengeluaran_rmh')->get();
        $data = array('pengeluaranrmh' => $pengeluaranrmh);
        return view ('pengeluaranrmh/index', $data);
    }
}
