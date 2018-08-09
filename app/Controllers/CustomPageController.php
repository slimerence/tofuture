<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31
 * Time: 16:36
 */

namespace Smartbro\Controllers;


use App\Http\Controllers\Controller;

class CustomPageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function shixi(){
        return view(
            _get_frontend_theme_path('pages.shixi'),
            $this->dataForView
        );
    }
    public function zhitong(){

        return view(
            _get_frontend_theme_path('pages.zhitong'),
            $this->dataForView
        );
    }
    public function about(){

        return view(
            _get_frontend_theme_path('pages.about'),
            $this->dataForView
        );
    }
}