<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{
  public function create(){

     return view('auth.register');
 }

 public function store(){

   $this-> validate(request(),[

     'name' => 'required',
     'email' => 'required|email',
     'password' => 'required'
   ]);

   $user-> User::create(request(['name','email','password']));

   auth()->$login ($user);
   return redirect()-> to ('/register');
 }
}
