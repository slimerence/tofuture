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
        $this->dataForView['pageTitle'] = 'WIN CAREER - 名企实习';
        $this->dataForView['metaKeywords'] = '';
        $this->dataForView['metaDescription'] = '';
        return view(
            _get_frontend_theme_path('pages.shixi'),
            $this->dataForView
        );
    }
    public function zhitong(){
        $this->dataForView['pageTitle'] = 'WIN CAREER - 名企直通';
        $this->dataForView['metaKeywords'] = '';
        $this->dataForView['metaDescription'] = '';
        return view(
            _get_frontend_theme_path('pages.zhitong'),
            $this->dataForView
        );
    }
    public function about(){
        $this->dataForView['pageTitle'] = 'WIN CAREER - 关于我们';
        $this->dataForView['metaKeywords'] = '';
        $this->dataForView['metaDescription'] = '';
        return view(
            _get_frontend_theme_path('pages.about'),
            $this->dataForView
        );
    }
    public function kuaiji(){
        $this->dataForView['pageTitle'] = 'WIN CAREER - 会计训练营';
        $this->dataForView['metaKeywords'] = '';
        $this->dataForView['metaDescription'] = '';
        return view(
            _get_frontend_theme_path('pages.kuaiji'),
            $this->dataForView
        );
    }
    public function jinrong(){
        $this->dataForView['pageTitle'] = 'WIN CAREER - 金融训练营';
        $this->dataForView['metaKeywords'] = '';
        $this->dataForView['metaDescription'] = '';
        return view(
            _get_frontend_theme_path('pages.jinrong'),
            $this->dataForView
        );
    }
    public function cfa($pageUri){
        $filename = resource_path('views/frontend/').str_replace('.','/',_get_frontend_theme_prefix()).'/pages/'.str_replace('.','/',$pageUri).'.blade.php';
        if(file_exists($filename)){
            $this->dataForView['pageTitle'] = 'WIN CAREER';
            $this->dataForView['metaKeywords'] = '';
            $this->dataForView['metaDescription'] = '';
            return view(_get_frontend_theme_path('pages.'.$pageUri),$this->dataForView);
        }else {
            $page = Page::where('uri', $pageUri)->orWhere('uri', '/' . $pageUri)->first();
            if (!$page) {
                // 404 Error
                return view(_get_frontend_theme_path('pages.404'), $this->dataForView);
            }
            $this->dataForView['page'] = $page;
            $this->dataForView['pageTitle'] = app()->getLocale() == 'cn' ? $page->title_cn : $page->title;
            $this->dataForView['metaKeywords'] = $page->seo_keyword;
            $this->dataForView['metaDescription'] = $page->seo_description;

            return view(_get_frontend_theme_path('templates.static'), $this->dataForView);
        }
    }

    public function teachers(){
        $this->dataForView['pageTitle'] = 'WIN CAREER - 专业师资';
        $this->dataForView['metaKeywords'] = '';
        $this->dataForView['metaDescription'] = '';
        return view(_get_frontend_theme_path('pages.teachers'), $this->dataForView);
    }

    public function verify(){
        return response()->download( public_path(). '/storage/uploads/92A2D1A931F1351ED21896D26C123E4A.txt');
    }
}