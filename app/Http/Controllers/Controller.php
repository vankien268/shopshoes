<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     // dinh dang kieu tra ve cho ajax 
    // data de nhan 1 mang loi validator, dattaa để lưu các lỗi validator
    public function response($data=null, $status=200, $message=''){

    	return response([
    			'data'=>$data,
    			'status'=>$status,
    			'message'=>$message
    	]);
    }
}

