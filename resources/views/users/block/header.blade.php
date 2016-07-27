<div id="top-bar" class="container">
		<div class="row">
			<div class="span4">
				<form method="POST" class="search_form">
					<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
				</form>
			</div>
			<div class="span8">
				<div class="account pull-right">
					<ul class="user-menu">				
						<li><a href="#">Tài khoản</a></li>
						<li><a href="{{ route('gio-hang') }}">Giỏ hàng</a></li>
						<li><a href="{{ route('tienhanhthanhtoan') }}">Thanh toán</a></li>
						@if (Auth::guest())
	                    <li><a href="{{ route('loginOrRegister') }}">Đăng nhập</a></li>	
	                    @else
                        <li><a href="{{ url('/logout') }}">Đăng xuất</a></li>
                    	@endif	
					</ul>
				</div>
			</div>
		</div>
	</div>