<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromController extends Controller
{
    public function formcreate(){
        return view("form");
    }
    public function formsubmit(Request $request){
        $rues=[
            'name'=>'required|max:5',
            'email'=>'required|email',
        ];
        $customMsg=[
            'name.required'=>'Enter your name',
            'name.max'=>'The name must not be greater than 5 characters',
            'email.required'=>'Enter your email',
            'email.email'=>'Email must be valid',
        ];
        $this->validate($request,$rues,$customMsg);
        return $request->all();
    }
}
