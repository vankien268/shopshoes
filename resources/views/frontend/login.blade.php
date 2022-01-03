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




 <div class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-text">
                                    <h2>Đăng nhập</h2>
                                    <span></span>
                                </div>
                                <div class="login-form">
                                    <form action="#" method="post" id="form-login">
                                        <div><input type="text" name="username" placeholder="Nhập username"></div>
                                       <div><input type="password" name="password" placeholder="Nhập mật khẩu"><div>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                            	
                                                <input type="checkbox" id="remember" name="checkbox">
                                                <label for="remember">Remember me</label>
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                            <button type="submit" class="default-btn">Đăng nhập</button>
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
		let form = $('#form-login');

		form.find('button[type=submit]').click(function(e){
			// huy su kien submit
			e.preventDefault();
			// alert('okok');
			// chi cho bam 1 lan
			let self = $(this);
			self.prop('disabled', true);

			// lay thong tin ng dung nhap de dang ky

			
			let username = form.find('input[name=username]').val();
			
			let password = form.find('input[name=password]').val();
		

			 // xoa class vs feedback
			  form.find('.invalid-feedback').remove();
			 form.find('.is-invalid').removeClass('is-invalid'); // boder mau do
			// bat dau thuc hien ajax
			$.ajax({
				 headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
				url: '{{ route('form.login.home') }}',
				method:'POST',
				data:{
					username:username, password:password

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
					Swal.fire({
						icon:'error',
						title:res.message

					});
					return;
				}

				location.href="{{ route('home') }}";

			}).fail(function(res){
				self.prop('disabled', false);
				alert(res.message);
			});
		});
	});	

</script>


@endsection