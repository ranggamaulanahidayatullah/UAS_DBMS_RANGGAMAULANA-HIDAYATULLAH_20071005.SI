<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $petugasrmh= \DB::table('t_pentugas_rmh')->get();
        $data = array('petugasrmh' => $petugasrmh);
        return view ('petugasrmh/index', $data);
    }
}
