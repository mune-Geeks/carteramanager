<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ChangeNameController extends Controller
{
    //
    public function index(){
        $user = \Auth::user();

        return view('editname',compact('user'));
    }
    
    public function update(Request $request) {
        
        $user = \Auth::user();
        $data = $request->all();
        //dd($data);
        //
        unset($data['_token']);
        //
        $user -> fill($data)->save();
        //
        return redirect('/setting');
    }
}
