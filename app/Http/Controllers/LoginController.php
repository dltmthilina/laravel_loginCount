<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('name', 'password');
        
     
         try{
            if(Auth::attempt($credentials)){
                $user = Auth::user();
                $userId = $user->id;
                $name = $user->name; 
                $isAdmin = $user->isAdmin; 
                session(['userId' => $userId]);
                Session::put([
                    'userId' => $userId,
                    'name' => $name,  
                ]);

                if($isAdmin){
                    return redirect()->intended('/admin');
                }else{
                    return redirect()->intended('/user/'.$userId);
                }
               
            }else{
                return response()->json(['message' => 'Invalid credentials']);
            }
        }catch(\Exception $error){
            return response()->json(['message' => 'Please enter valid data!']);
        } 

    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
