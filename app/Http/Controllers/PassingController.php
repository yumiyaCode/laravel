<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class PassingController extends Controller
{
    public function pass()
    {
        $data= "Sesshoin Kiara";
        return view('latihan',compact('data'));
    }
      public function pass1()
    {
        $bs= [

        ['nama'=>'kiara','kelas'=>'chaldea I'],
        ['nama'=>'tiamat','kelas'=>'chaldea II'],

        ];
        return view('latihan1',['beast'=>$bs]);
    }
    public function pass2()
    {
     $tabungan = Tabungan::all()->take(10);
     return view('latihan2',compact('tabungan'));
    }
}
