@extends('users.master')
@section('content')
<?php $title_banner = 'Tiến hành thanh toán'; ?>
@include('users.block.banner')
<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<form action="{{ route('xulythanhtoan') }}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
								</div>
								<div id="collapseTwo" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											
											<div class="span6">
												<h4>Your Personal Details</h4>
												<div class="control-group">
													<label class="control-label">Họ</label>
													<div class="controls">
														<input type="text" name="ho" @if(!Auth::guest()) 
																		value="{{ Auth::user()->firstname }}"
																		@endif
																		class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Tên</label>
													<div class="controls">
														<input type="text" name="ten" @if(!Auth::guest()) 
																		value="{{ Auth::user()->lastname }}"
																		@endif class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Địa chỉ mail</label>
													<div class="controls">
														<input type="text" name="email" @if(!Auth::guest()) 
																		value="{{ Auth::user()->email }}"
																		@endif class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Điện thoại</label>
													<div class="controls">
														<input type="text" name="dienthoai" class="input-xlarge">
													</div>
												</div>
												
											</div>

											<div class="span6">
												<h4>Your Address</h4>
												<div class="control-group">
													<label class="control-label">Công ty</label>
													<div class="controls">
														<input type="text" placeholder="" name="congty" class="input-xlarge">
													</div>
												</div>
																  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Địa chỉ 1:</label>
													<div class="controls">
														<input type="text" placeholder="" name="diachi1" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Địa chỉ 2:</label>
													<div class="controls">
														<input type="text" placeholder="" name="diachi2" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Thành phố:</label>
													<div class="controls">
														<input type="text" placeholder="" name="thanhpho" class="input-xlarge">
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Xác nhận đơn hàng</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Bạn muốn nói gì không?</label>
												<div class="controls">
													<textarea rows="3" id="textarea" name="confirm" class="span12"></textarea>
												</div>
											</div>									
											<button class="btn btn-inverse pull-right" type="submit">Xác nhận đơn hàng</button>
										</div>
									</div>
								</div>
							</div>
							</form>
						</div>				
					</div>
				</div>
			</section>		
@endsection	

