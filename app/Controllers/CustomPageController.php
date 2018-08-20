<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31
 * Time: 16:36
 */

namespace Smartbro\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;


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
    public function kuaiji(){
        return view(
            _get_frontend_theme_path('pages.kuaiji'),
            $this->dataForView
        );
    }
    public function jinrong(){
        return view(
            _get_frontend_theme_path('pages.404'),
            $this->dataForView
        );
    }
    public function cfa($pageUri){
        $page = Page::where('uri',$pageUri)->orWhere('uri', '/'.$pageUri)->first();
        if(!$page){
            // 404 Error
            return view(_get_frontend_theme_path('pages.404'), $this->dataForView);
        }
        $this->dataForView['page'] = $page;
        $this->dataForView['pageTitle'] = app()->getLocale()=='cn' ? $page->title_cn : $page->title;
        $this->dataForView['metaKeywords'] = $page->seo_keyword;
        $this->dataForView['metaDescription'] = $page->seo_description;

        return view(_get_frontend_theme_path('templates.static'), $this->dataForView);
    }

    public function teachers(){
        return view(_get_frontend_theme_path('pages.teachers'), $this->dataForView);
    }
}