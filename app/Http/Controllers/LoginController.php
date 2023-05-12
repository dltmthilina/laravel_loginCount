<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
            

        if($request->isMethod('post')) {

            if ($request->all()) {
                // the request contains data
                $data = [
                    'name' => $request->input('name'),
                    'password' => $request->input('password'),

                ];

                return redirect('/user')->with($data);
            } else {
                // the request does not contain data
                return redirect('/')->with('error', 'No data provided');
            }
              
        }
       
    }
}
