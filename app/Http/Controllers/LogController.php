<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    /*cách 1 get
    public function login($password=null,$email=null){
        return view('login',['password'=>$password,'email'=>$email]);
     }

     public function register($name1=null,$name2=null,$email=null,$password=null){
        return view('register',['name1'=>$name1,'name2'=>$name2,'password'=>$password,'email'=>$email]);
     }
     */
     /*cách 2 get
     public function login(Request $request){
        return view('login',['email'=>$request->query('email'),'password'=>$request->query('password')]);
     }

     public function register(Request $request){
        return view('register',['name1'=>$request->query('name1'),'name2'=>$request->query('name2'),'email'=>$request->query('email'),'password'=>$request->query('password'),'password1'=>$request->query('password1')]);
     }
     */
     //public function password(Request $request){
        //dd($request->post('inputEmail'));
        // return view('password',['email'=>$email]);
        //return view('password',['email'=>$request->query('email')]);
     //}
     public function password(Request $request){
        $form= $request->post();
        return view('password',$form);
     }
     public function login(Request $request){
        $form= $request->post();
        return view('login',$form);
     }
     public function register(Request $request){
       $form= $request->post();
        return view('register',$form);
     }
}
