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
        $pages = config('blog.pages');
        return view('web.blog.index', [
            'pages' => $pages
        ]);
    }

    /**
     * 博客二级分类域名
     */
    public function page($page)
    {
        $pages = config('blog.pages');
        $code = $page;
        $page = $pages[$code];
        return view('web.blog.page', [
            'code' => $code,
            'page' => $page
        ]);
    }

    /**
     * 博客列表
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
