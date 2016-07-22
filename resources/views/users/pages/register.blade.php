@extends('users.master')
@section('content')
<?php $title_banner = 'Đăng nhập hoặc đăng ký'; ?>
@include('users.block.banner')		
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text">Form <strong>Đăng nhập</strong> </span></h4>
						<form method="POST" action="{{ url('/dang-nhap') }}">
                        {{ csrf_field() }}
							<fieldset>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="text" placeholder="Nhập email của bạn" id="email" name="email" value="{{ old('email') }}" class="input-xlarge">
										 @if ($errors->has('email'))
		                                    <div class="alert alert-warning">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </div>
		                                @endif
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label">Mật khẩu</label>
									<div class="controls">
										<input type="password" placeholder="Nhập mật khẩu" id="password" name="password" class="input-xlarge">
									</div>
									@if ($errors->has('password'))
                                     <div class="alert alert-warning">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Đăng nhập tài khoản">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text">Form <strong>Đăng ký</strong> </span></h4>
						<form action="{{ route('xu-ly-dang-ky') }}" method="post" class="form-stacked">
						{{ csrf_field() }}
							<fieldset>
								<div class="control-group">
									<label class="control-label">Họ</label>
									<div class="controls">
										<input type="text" value="{{ old('ho') }}" name="ho" required placeholder="Nhập họ của bạn" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tên</label>
									<div class="controls">
										<input type="text" name="ten" value="{{ old('ten') }}"  required placeholder="Nhập tên của bạn" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Địa chỉ</label>
									<div class="controls">
										<input type="text" name="diachi" value="{{ old('diachi') }}" required placeholder="Địa chỉ của bạn" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Địa chỉ email</label>
									<div class="controls">
										<input type="email" name="email" value="{{ old('email') }}" required placeholder="Nhập email" class="input-xlarge">
									</div>
									@if ($errors->has('email'))
                                    <div class="alert alert-warning">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                    @endif
								</div>
								<div class="control-group">
									<label class="control-label">Mật khẩu:</label>
									<div class="controls">
										<input type="password" name="password" required placeholder="Nhập mật" class="input-xlarge">
									</div>
								</div>	
								<div class="control-group">
									<label class="control-label">nhập lại mật khẩu:</label>
									<div class="controls">
										<input type="password" name="rePassword" required placeholder="Nhập lai mật khẩu của bạn" class="input-xlarge">
									</div>
									@if ($errors->has('rePassword'))
                                    <div class="alert alert-warning">
                                        <strong>{{ $errors->first('rePassword') }}</strong>
                                    </div>
                                	@endif
								</div>							                            
								<div class="control-group">
									<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>
@endsection			