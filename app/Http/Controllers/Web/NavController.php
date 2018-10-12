<?php
/**
 * Created by PhpStorm.
 * User: pro.y
 * Date: 2018/10/12
 * Time: 下午5:22
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class NavController extends Controller
{
    /**
     * 博客首页
     */
    public function index()
    {

        return view('web.blog.index');
    }

    /**
     * 早九晚五
     */
    public function work()
    {
        return view('web.blog.work');
    }

    /**
     * 浪迹天涯
     */
    public function tourism()
    {
        return view('web.blog.tourism');
    }

    /**
     * 吃吃喝喝
     */
    public function food()
    {
        return view('web.blog.food');
    }

    /**
     * 点点滴滴
     */
    public function photo()
    {
        return view('web.blog.photo');
    }

    /**
     * 模范夫妻
     */
    public function about()
    {
        return view('web.blog.about');
    }

}
