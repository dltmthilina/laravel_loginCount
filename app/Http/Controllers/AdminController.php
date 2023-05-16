<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
   public function createUser(){
        return view('userregister');
   }

   public function storeUser(Request $request){
        $formData = new User();
        $formData->name = $request->input('name');
        $formData->email = $request->input('nic');
        $formData->message = $request->input('message');
        $formData->save();
   }
}
