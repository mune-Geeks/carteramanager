<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\ChangePasswordController;


class ChangePasswordController extends Controller
{
    //
    public function __construct()
  {
      $this->middleware('auth');
  }
 
  public function index(){

    $user = \Auth::user();
      return view('Auth.repassword', compact('user'));
  }
  public function edit()
  {
    return view('auth.repassword')
            ->with('user', \Auth::user());
  }
 
  public function update(Request $request)
  {
    $user = \Auth::user();
    $data = $request->all();
    //dd($data,$user->password);
    //unset($data['_token']);
        
    if(!password_verify($data['original'],$user->password)){

        return redirect('/repswd')->with('warning','wrong password');
    } elseif(!$data['newpass'] == $data['renewpass']){

        return redirect('/repswd')->with('warning','please enter same password');
    }
    $this->validator($request->all())->validate();

    $user->password = bcrypt($data->newpass);
    $user->save();

    return redirect('/repswd')->with('warning','update successfully');
  }
}
