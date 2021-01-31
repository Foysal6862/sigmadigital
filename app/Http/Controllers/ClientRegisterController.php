<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientRegisterController extends Controller
{
    public function index(){
        return view('front-end.client-register.client-register');
    }
    public function saveClientRegister(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);

        $client_register = new Client();
        $client_register->name = $request->name;
        $client_register->email = $request->email;
        $client_register->phone = $request->phone;
        $client_register->address = $request->address;
        $client_register->save();

        return redirect('/client-register')->with('message', 'Account create successfully');
    }

}
