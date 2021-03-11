<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flight;
use Carbon\Carbon;
class FlightController extends Controller
{
    //

    function flight(){
//echo "string";
      return view('flight.index');
    }

    function flight_create(Request $request){

      $request->validate([
             'flightfrom'        =>'required',
             'to'       =>'required',
             'departing'       =>'required',
             'returning' =>'required',
             'adult'      =>'required',
             'child'      =>'required',
           ]); //echo "string";
           flight::insert([

             'flightfrom'         =>$request->flightfrom,
             'to'        =>$request->to,
             'departing'  =>$request->departing,
             'returning'       =>$request->returning,
             'adult'       =>$request->adult,
             'child'       =>$request->child,
             'created_at'   =>Carbon::now(),

           ]);
           return back();
    }
    function flight_list(){

      $lists =flight::all();

      return view('flight.flight_list',compact('lists'));
    }
  }
