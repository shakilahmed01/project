<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    //
    function conference(){
//echo "string";
      return view('popup.conference');
    }

    function jumbortan(){
  //echo "string";
      return view('popup.jumbortan');
    }

    function peraa(){
  //echo "string";
      return view('popup.peraa');
    }

    function relux(){
  //echo "string";
      return view('popup.relux');
    }


}
