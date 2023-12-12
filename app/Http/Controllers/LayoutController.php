<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
class LayoutController extends Controller
{
    //

        public function login(){
            return view('login');
        }
        public function loginstore(Request $request){
            $email = $request->email;
            $password = $request->password;
            $user = User::where('email','=',$email)
            ->where('password','=', $password)
            ->first();


            if(!$user){
                return redirect()->back()->with('err_msg','Invalid email or password');
            }
            else{
                //store user data in session
                $request->Session()->put('username', $user->name);
                $request->Session()->put('useremail', $user->email);
                $request->Session()->put('userrole', $user->role);

                if($user->role=='customer') {
                    return redirect()->to('dashboard3');
                }
                else {
                    return redirect()->to('dashboard2');
                }

            }
        }
        public function logout() {
            Session::forget(['username','userrole']);
            return redirect()->to('login');
        }

         public function customer(){
           return view('website.pages.home');
         }

         public function product(){
            return view('website.pages.product');
          }
          public function blog(){
            return view('website.pages.blog');
          }
          public function home(){
            return view('website.pages.home');
          }

        public function admin(){
            return view('admin.pages.homeone');
        }
        public function homeone(){
            return view('admin.pages.homeone');
        }
        public function table(){
            return view('admin.pages.tablepage');
        }
        public function chart(){
            return view('admin.pages.chartpage');
        }

}
