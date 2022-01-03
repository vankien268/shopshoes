@extends('frontend.trangtrong')
@section('content')
 

<style type="text/css" media="screen">
	.col-sm-3{
		display: none;
	}
	/* .col-md-12 .location > ul{
		display: none;
	} */
		
</style>




<div class="login-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-text">
                            <h2>Đăng ký</h2>
                           <!--  <span>Please Register using account detail bellow.</span> -->
                        </div>
                        <div class="login-form">
                            <form action="" method="post" id="register-form">
                            	<div>
                            	 <input type="text" name="name" placeholder="Họ tên">
                            	</div>
                            	<div>
                                <input type="text" name="username" placeholder="Username">
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="Nhập mật khẩu">
                            </div>
                                 <div><input type="password" name="r_password" placeholder="Nhập lại mật khẩu"></div>

                               <div><input name="email" placeholder="Nhập email" type="email"></div>
                                <div class="button-box">
                                    <button type="submit" class="default-btn">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" charset="utf-8" async defer>

	$(document).ready(function(){
		let form = $('#register-form');

		form.find('button[type=submit]').click(function(e){
			// huy su kien submit
			e.preventDefault();
			// alert('okok');
			// chi cho bam 1 lan
			let self = $(this);
			self.prop('disabled', true);

			// lay thong tin ng dung nhap de dang ky

			let name = form.find('input[name=name]').val();
			let username = form.find('input[name=username]').val();
			
			let password = form.find('input[name=password]').val();
			let r_password = form.find('input[name=r_password]').val();
			let email = form.find('input[name=email]').val();

			 // xoa class vs feedback
			  form.find('.invalid-feedback').remove();
			 form.find('.is-invalid').removeClass('is-invalid'); // boder mau do
			// bat dau thuc hien ajax
			$.ajax({
				 headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
				url: '{{ route('show.register.home') }}',
				method:'POST',
				data:{
					email:email, username:username, password:password, r_password:r_password, name:name

				}
			}).done(function(res){
				self.prop('disabled', false);
				// loi 422 do ng dung bo trung hoac sai dinh dang email
				if(res.status ===422){
					// hien thi loi do ng dung nhap sai hoac k nhap vao duoi the input
					$.each(res.data, function(index, value){
						form.find('input[name='+index+']').addClass('is-invalid').parent().append('<div class="invalid-feedback text-danger">'+value[0]+'</div>');
					});
					return;
				}
				else if(res.status!=200){
					alert("Đăng ký tài khoản không thành công!");
					return;
				}
				Swal.fire({
					icon:'success',
					title:res.message,
					showCloseButton: true,


				}).then(function(result){
					if(result.isConfirmed){
						location.href="{{ route('form.login.home') }}";
					}
				});

				

			}).fail(function(res){
				self.prop('disabled', false);
				alert(res.message);
			});
		});
	});	

</script>


@endsection