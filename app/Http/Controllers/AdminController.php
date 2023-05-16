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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nic' => 'required',
            'message' => 'required',
        ]);
        $formData = new User();
        $formData->name = $validatedData['name'];
        $formData->nic = $validatedData['nic'];
        $formData->contact = $validatedData['contact'];
        $formData->password = $validatedData['password'];
        $formData->save();
   }
}
