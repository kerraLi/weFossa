<?php
/**
 * BlogController:博客
 * User: llicat
 * Date: 2018/10/12
 * Time: 下午4:05
 */


namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    /**
     * 博客首页
     */
    public function index()
    {

        return view('web.blog.index');
    }

    /**
     * 博客列表页
     */
    public function list()
    {

        return view('web.blog.list');
    }

    /**
     * 博客详情
     * @param $id
     */
    public function detail($id)
    {

    }


}
