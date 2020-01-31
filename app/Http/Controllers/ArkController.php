<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arknight;

class ArkController extends Controller
{
     public function list1()
    {
     $ark = Arknight::all();
     return view('list1',compact('ark'));
    }
    public function list2($id)
    {
     $ark = Arknight::findOrFail($id);
     return view('list2',compact('ark'));
    }
}
