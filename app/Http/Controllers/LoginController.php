<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('name', 'password');
        
     
         try{
            if(Auth::attempt($credentials)){
                $userId = Auth::id(); 
                session(['userId' => $userId]);
                return redirect()->intended('/user/'.$userId);
            }else{
                return response()->json(['message' => 'Invalid credentials']);
            }
        }catch(\Exception $error){
            return response()->json(['message' => 'Please enter valid data!']);
        } 

    }
}
