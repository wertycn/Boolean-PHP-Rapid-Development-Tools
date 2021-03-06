<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Repositories\UsersRepository;

class LoginController extends Controller
{
    use AuthenticatesUsers;
	
	/**
     * 登录页面
     *
	 * @author    	倒车的螃蟹<yh15229262120@qq.com> 
     * @access 		public
     * @param  		\Illuminate\Http\Request $request
	 * @return  	\Illuminate\Http\Response
	 */
    public function login(Request $request)
    {
//      $pwd = "123456";
// 		$hash = password_hash($pwd, PASSWORD_DEFAULT);
// 		echo $hash;
// 		if (password_verify('123456','$2y$10$4kAu4FNGuolmRmSSHgKEMe3DbG5pm3diikFkiAKNh.Sf1tPbB4uo2')) {
// 			echo "密码正确";
// 		} else { 
// 			echo "密码错误";
// 		}
		
		//dd(1);
		//用户登录验证
		if($request->isMethod('post')){
			return $this->checkLogin($request);
		}
		
		return view('auth.login');
    }
	
	/**
     * 处理登录认证
     *
     * @author    	倒车的螃蟹<yh15229262120@qq.com> 
     * @access 		public
     * @param  		\Illuminate\Http\Request $request
     * @return 
     */
    public function checkLogin($request)
    {
        //\Illuminate\Support\Facades\DB::connection()->enableQueryLog();
		$user = UsersRepository::where('status', '=', '1')
				->where(function ($query) use ($request) {
					$query->where('phone', '=', $request->username)
						  ->orWhere('email', '=', $request->username)
						  ->orWhere('name', '=', $request->username);
				})
				->first();
			
		//dd(\Illuminate\Support\Facades\DB::getQueryLog());
		//dd($user);
		if($user){
			//dd($user->password);
			//dd($request->password);
			$hash = password_hash($request->password, PASSWORD_DEFAULT);
			//dd($hash);
			if(password_verify($request->password, $user->password)) {
				Auth::login($user);
				//记录登录时间
				UsersRepository::where('status', '=', '1')
					->update(['login_time' => date('Y-m-d H:i:s', time())]);
				return redirect('/');
				//$user = $request->user();
				//dd($user);
			}else{ 
				return error("您输入的登录密码错误");
			}
		}else{
			return error("您输入的登录账号错误");
		}
    }
	
	/**
	 * 处理登录认证
	 *
	 * @author    	倒车的螃蟹<yh15229262120@qq.com> 
	 * @access 		public
	 * @param  		\Illuminate\Http\Request $request
	 * @return  	\Illuminate\Http\Response
	 */
	public function logout()
	{
		Auth::logout();
		return success("操作成功", '您已登出系统', 'login');
	}
}