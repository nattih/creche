<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'nom'=> ['required','string'],  
            'prenom'=> ['required','string'],
            'roles'=> ['required','integer'],
            'cnib'=> ['required','string'],
            'telephone'=> ['required','integer'], 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
          ]);
          
        User::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom, 
            'roles'=>$request->roles, 
            'cnib'=>$request->cnib, 
            'telephone'=>$request->telephone, 
            'email'=>$request->email, 
            'password' => Hash::make($request['password']),
        ]); 
        return redirect()->back();   
    }
}
