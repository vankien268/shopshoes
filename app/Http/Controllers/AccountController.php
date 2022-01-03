<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;
class AccountController extends Controller
{
    //show from login
    public function showRegister(){

    	return view('frontend.register');
    }

    // posst
     public function showRegisterPost(Request $request){

    	 $validator = Validator::make($request->all(),
         // định dạng llooxiphai la cai gi
		         [
		          'username' => 'required|unique:user|string',
		          'password' => 'required|min:6|string',
		           'r_password' => 'required|min:6|same:password|string',
		            'email' => 'required|email|unique:user|max:50',
		            'name' => 'required|string'
		       ]


    	);

     	if($validator->fails()){
          return $this->response($validator->errors(), 422);
        }

        $user = new User();

         $user->name = $request->get('name');
           $user->username = $request->get('username');
            $user->password = bcrypt($request->get('password'));
             $user->email = $request->get('email');
              $user->save();

        // khi insert xong thi hien thi thong bao

              return $this->response(null, 200, 'Bạn đã đăng ký tài khoản thành công!');
      }

       public function showLogin(){

    	   return view('frontend.login');
    }
      public function showLoginPost(Request $request){

        $data = $request->all();
       $validator = Validator::make($request->all(),
         // định dạng llooxiphai la cai gi
             [
              'username' => 'required|string',
              'password' => 'required|min:6|string'
               
           ]


      );

      if($validator->fails()){
          return $this->response($validator->errors(), 422);
        }

       $check = Auth::guard('web')->attempt(['username'=>$data['username'], 'password'=>$data['password']]);
       if(!$check){
           return $this->response(null, 301, 'Tài khoản hoặc mật khẩu không đúng!');
       }
      else{
        if(Auth::guard('web')->user()->status==0)
           return $this->response(null, 200);
        else{
                Auth::guard('web')->logout();
             return $this->response(null, 301, 'Tài khoản hoặc mật khẩu không đúng!');
        }
          
      }

      

             
      }
      public function logout(){

        // if(Auth::guard('web')->user()->status==0){
             Auth::guard('web')->logout();
            
        // }
         return redirect()->route('index');

           // return redirect()->route('index');
      }


}
