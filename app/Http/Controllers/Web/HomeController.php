<?php
/**
 * HomeController
 * User: llicat
 * Date: 2018/10/12
 * Time: 下午12:21
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        return view('web.home.index');
    }

    /**
     * 登陆
     */
    public function login()
    {
        return view('web.home.login');
    }

    /**
     * 注册
     */
    public function register()
    {
        return view('web.home.register');
    }

    /**
     * 退出登陆
     */
    public function logout()
    {

    }
}
