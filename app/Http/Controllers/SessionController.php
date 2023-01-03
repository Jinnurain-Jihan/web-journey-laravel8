<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
       if($request->session()->has('bd')){
            return $request->session()->get('bd');
       }else{
        return 'Session has no value';
       }
    }
    public function storeSessionData(Request $request){
        $request->session()->put('bd','Bangladesh');
        return 'Value successfully added to the session';
    }
    public function destroySessionData(Request $request){
        $request->session()->forget('bd');
        return 'Session value successfully destroy';
    }
}
