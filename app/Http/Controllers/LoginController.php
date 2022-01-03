<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
   public function showFormlogin(){

   	return view('backend.login');
   }

   // theo ajax
   public function showFormloginPost(Request $request){

        $username = $request->get('username');
        $password = $request->get('password');
  //      $password = $request->get('password');
       $validator = Validator::make($request->all(),
         // định dạng llooxiphai la cai gi
         [
          'username' => 'required|string',
          'password' => 'required|min:3|string',
       ]

       // định dạng thông báo lỗi nếu có
     
    );


        // neu loi 422, 422 la loi do ng ko nhap hoac nhap sai vd dinh dang email,


        if($validator->fails()){
          return $this->response($validator->errors(), 422);
        }
        // neu khong loi validator

        $array = ['username'=>$username,'password'=>$password];
        $check = Auth::guard('admin')->attempt($array);
        if( !$check){
            return $this->response(null, 401, 'Tài khoản hoặc mật khẩu không đúng!');
        }
        else{

            if(Auth::guard('admin')->user()->status==1)
              return $this->response(null,200, 'Dang nhap thanh cong');
            else{
                   Auth::guard('admin')->logout();
                  return $this->response(null, 401, 'Tài khoản hoặc mật khẩu không đúng!');
            }
        }
        

   }

   public function logout(){
   		// dang xuat
     // if(Auth::guard('admin')->user()->status==1){
            Auth::guard('admin')->logout();
         return redirect(url('admin/login'));
     // }
       // return redirect(url('admin'));
   	
   }
}
