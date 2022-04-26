<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(){
        $user = \Auth::user();

        return view('editname',compact('user'));
    }
}
