@extends('layouts.base')

@section('title', '登录')

@push('css')
<link rel="stylesheet" href="{{file_path('/include/style/login.css')}}" media="all">
@endpush

@section('content')
@include('auth.nav')
<div style="margin-top: 100px;">
	<div class="layadmin-user-login-main">
		<div class="layadmin-user-login-box layadmin-user-login-header">
			<h2>布尔懒人工具包<span class="layui-badge" style="position: relative;top:-30px;">BLZ 3.0 beta</span></h2>
		</div>
		<div class="layadmin-user-login-box layadmin-user-login-body layui-form">
			<form action="" method="post">
				@csrf
				<div class="layui-form-item">
					<label class="layadmin-user-login-icon layui-icon layui-icon-email" for="email"></label>
					<input type="text" name="email" id="email" lay-verify="required" value="{{ old('email') }}" placeholder="邮箱" autocomplete="off" class="layui-input">
				</div>
				<div class="layui-form-item">
					<label class="layadmin-user-login-icon layui-icon layui-icon-password" for="password"></label>
					<input type="password" name="password" id="password" lay-verify="required|pass" placeholder="密码" autocomplete="off" class="layui-input">
				</div>
				<!-- <div class="layui-form-item">
					<div class="layui-row">
						<div class="layui-col-xs7">
							<label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="vercode"></label>
							<input type="text" name="vercode" id="vercode" lay-verify="required" placeholder="图形验证码" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-col-xs5">
							<div style="margin-left: 10px;">
								<img src="{}?rand={{time()}}" lay-filter="vercode" style="height: 37px;" class="layadmin-user-login-codeimg" id="vercode">
							</div>
						</div>
					</div>
				</div> -->
				<div class="layui-form-item" style="margin-bottom: 20px;">
					<input type="checkbox" name="remember" lay-skin="primary" title="记住密码">
					<a href="{{url('password/reset')}}" class="layadmin-user-jump-change layadmin-link" style="margin-top: 7px;">忘记密码？</a>
				</div>
				<div class="layui-form-item">
					<button class="layui-btn layui-btn-fluid" lay-submit lay-filter="submit">登 入</button>
				</div>
			</form>
			<div class="layui-trans layui-form-item layadmin-user-login-other">
				<label>社交账号登入</label>
				<a href="javascript:;"><i class="layui-icon layui-icon-login-qq"></i></a>
				<a href="javascript:;"><i class="layui-icon layui-icon-login-wechat"></i></a>
				<a href="javascript:;"><i class="layui-icon layui-icon-login-weibo"></i></a>
				<a href="{{url('register')}}" class="layadmin-user-jump-change layadmin-link">注册帐号</a>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
	layui.config({
		base: '{{file_path('/include/')}}' //静态资源所在路径
	}).extend({
		index: 'lib/index' //主入口模块
	}).use(['index', 'jquery', 'form', 'element'], function(){
		var form = layui.form;
        var element = layui.element;
        var $ = layui.$;
		
        $(document).on('click', '#vercode', function(data) {
            $(this).attr('src', 'captcha.html?rand={:time()}');
        });
	});
</script>
@endpush