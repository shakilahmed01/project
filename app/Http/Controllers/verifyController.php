<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class verifyController extends Controller
{
    public function getVerify(){
      return view('verify');
    }
    public function postVerify(Request $request){
      if($user=User::where('code',$request->code)->first()){
        $user->active=1;
        $user->code=null;
        $user->save();
        return redirect()->route('login')->withMessage('your account is active');
      }
      else{
        return back()->withMessage('verify code is not correct . please try again');
      }
    }
}
