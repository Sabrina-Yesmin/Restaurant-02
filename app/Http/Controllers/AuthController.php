<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
class AuthController extends Controller
//login view show kor ar jo nno
{
    public function login(){
        return view('login');
    }
    //login store data recv kor be tai kic hu reqs class
    public function loginstore(Request $request){
        $email = $request->email;
        $password = $request->password;
        //for database communication
        $user = User::where('email','=',$email)
        ->where('password','=', $password)
        ->first();

         //dd($user);

        if(!$user){
            return redirect()->back()->with('err_msg','Invalid email or password');
        }
        else{
            //store user data in session
            $request->Session()->put('username', $user->name);
            $request->Session()->put('useremail', $user->email);
            $request->Session()->put('userrole', $user->role);

            return redirect()->to('/dashboard');

        }
    }
        public function dashboard(){
            return view('dashboard');
        }


        public function student(){
            return view('student');
        }

        public function teacher(){
            return view('teacher');
        }
        
}
