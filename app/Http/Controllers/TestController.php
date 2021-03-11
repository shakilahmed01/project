<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use App\Models\product;
use Carbon\Carbon;
class TestController extends Controller
{

  function index()
  {
    //echo "string";


    return view('information.index');
  }

  function create(Request $request)
  {

     $request->validate([
            'name'        =>'required',
            'email'       =>'required|email',
            'companyname' =>'required',
            'address'      =>'required',
          ]); //echo "string";
          test::insert([

            'name'         =>$request->name,
            'email'        =>$request->email,
            'companyname'  =>$request->companyname,
            'address'       =>$request->address,
            'created_at'   =>Carbon::now(),

          ]);
          return back();


}


function test_list(){

  $lists =test::all();

  return view('information.test_list',compact('lists'));
}

function dup(){

  return view('information.duplicate');
}
function dup_create(Request $request)
{
  $request->validate([
         'productname'              =>'required',
         'productcode'       =>'required',
         'brand'             =>'required',
         'price'             =>'required',
       ]); //echo "string";
       product::insert([

         'productname'               =>$request->productname,
         'productcode'        =>$request->productcode,
         'brand'              =>$request->brand,
         'price'              =>$request->price,
         'created_at'         =>Carbon::now(),

       ]);
       return back();
}
function dup_list(){

  $lists =product::all();

  return view('information.dup_list',compact('lists'));
}

}
