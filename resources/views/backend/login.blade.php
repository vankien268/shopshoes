
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<script src="js/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Custom Theme files -->

<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('login/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<link href="{{ asset('js/sweetalert2.css') }}" rel="stylesheet" type="text/css" media="all"/>
  <script src="{{ asset('js/sweetalert2.js') }}" ></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>Đăng nhập</h1>
		       {{--
		   @if(Session::has('fail'))
		       <h4 style="color:red; text-align: center;" >{{ Session::get('fail')  }}</h4>
		   @endif --}}
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="{{ url('admin/login') }}" method="post" id="login-form">
					 	<div class="form-group">
					 		<input type="text" value="" placeholder="nhập tài khoản" name="username"/>
					 	</div>
						
						<div class="form-group">
					<input type="password" placeholder="nhập mật khẩu" name="password" />
					</div>
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="#">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" value="Login"></input>
					</form>	
					
					
						
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!-- <<style type="text/css" media="screen">
	#login-
</style> -->
<script type="text/javascript" charset="utf-8" async defer>
	$(document).ready(function(){
		let form =$('#login-form');
		form.find('input[type=submit]').click(function(e){
			
			// e dufng de huy su kien khian click
			e.preventDefault(); // dday goi huy su kien khi click vao
			// alert('oke');
			//  lay thong tin ng dung nhap
			let username = form.find('input[name=username').val();
			let password = form.find('input[name=password').val();
			// alert(password);
			// chi cho ng dung click 1 lan
			let self = $(this);
			// alert('ok');
			 self.prop('disabled', true);
			 // xoa class vs feedback
			  form.find('.invalid-feedback').remove();
			 form.find('.is-invalid').removeClass('is-invalid'); // boder mau do
			
			 // bat dau thuc hien goi ajax
			 $.ajax({
			 	 headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
			 	// bthg co 3 cai url(goi den th url can xu ly, method(da so la kieu post), data: la de gui duw lieu ng nhap vao, de gui qua controller xu ly
			 	url:"{{ route('show.login') }}",
			 	method:'POST',
			 	data:{
			 		username: username, password:password
			 	}
			 	// ajjax thuong co 3 truong hop xu ly: 1. loi 422: la loi ng dung khong nhap hoac nhap sai email. loi !=200 la loi khong thanh, loi 3: la loi do he thong, la do th nao do no doi duong dan thi loi he thong se bao len

			 }).done(function(res){

			 	 self.prop('disabled', false);
			 	if(res.status ===422) { 
			 	console.log(res.data);
			 		//la loi validator thi each loi duoi the input
			 		$.each(res.data, function(index, value){
			 			  form.find('input[name='+index+']')
                        // hiển thị message đầu tiên vào dưới
                        .addClass('is-invalid') 
                        .parent().append("<div class='invalid-feedback' style='color:red;' ><b>"+value[0]+"</b></div>");
                  
			 		});
			 		// alert(res.message);

			 		return;
			 	}
			 	else if(res.status !=200){
			 		// loi khac thanh cong la doi dang nhap tai khoan va mat khau k dung
			 		// alert(res.message);
			 		Swal.fire({
						  icon: 'error',
						  title: res.message,
						 
						})
			 		 return;
			 	}
			 	// la 200 la thanh cong, kieu tra ve cua ajax la response, phai dinh dang cho no
			 	location.href = "{{ route('admin') }}";
			 	
			 }).fail(function(res){
			 	 self.prop('disabled', false);
			 		alert(res.message);
			 });

		});
	});

</script>
</body>
</html>