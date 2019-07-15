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
use Smartbro\Models\Video;


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
        $this->dataForView['pageTitle'] = '会计训练营 | CPA 证书培训 | 注册会计师';
        $this->dataForView['metaKeywords'] = '会计训练营 | CPA 证书培训 | 注册会计师';
        $this->dataForView['metaDescription'] = 'WinCareer 提供CPA证书培训，帮助想要获得注册会计师资格的同学们通过考试。Tofuture的本地会计训练营提供全面的培训服务，帮助同学们进入会计职场。';
        return view(
            _get_frontend_theme_path('pages.kuaiji'),
            $this->dataForView
        );
    }
    public function jinrong(){
        $this->dataForView['pageTitle'] = '金融训练营 | CFA 考证 | 回国金融就业必备';
        $this->dataForView['metaKeywords'] = '金融训练营 | CFA 考证 | 回国金融就业必备';
        $this->dataForView['metaDescription'] = 'WinCareer 为商科毕业生及想要在金融行业就业的同学们准备了金融训练营，帮助大家CFA考证，了解金融行业内知识，以及面试准备。CFA及FRM不光在澳洲金融行业的敲门砖，同时也是回国金融就业必备证书。';
        return view(
            _get_frontend_theme_path('pages.jinrong'),
            $this->dataForView
        );
    }
    public function cfa($pageUri){
        $filename = resource_path('views/frontend/').str_replace('.','/',_get_frontend_theme_prefix()).'/pages/'.str_replace('.','/',$pageUri).'.blade.php';
        if(file_exists($filename)){
            switch ($pageUri){
                case 'cfa考试':
                    $this->dataForView['pageTitle'] = 'CFA考试 | 商科就业 | FINTECH';
                    $this->dataForView['metaKeywords'] = 'CFA考试 | 商科就业 | FINTECH';
                    $this->dataForView['metaDescription'] = '通过CFA考试获得cfa资格有利于商科就业，尤其是海外留学生，更加收到各金融雇主的青睐。现在大热的Fintech也是CFA考试中重要的一项指标。';
                    break;
                case 'baoguo':
                    $this->dataForView['pageTitle'] = 'CFA保过计划 | CFA 全托管式集训营 | CFA 课程';
                    $this->dataForView['metaKeywords'] = 'CFA保过计划 | CFA 全托管式集训营 | CFA 课程';
                    $this->dataForView['metaDescription'] = '参加WinCareer的CFA保过计划，为您的cfa考试保驾护航。我们的具有科学的CFA课程安排，专业的导师团队，以及丰富的教学资源。是墨尔本CFA全托管式集训营领航者。';
                    $posts = Page::where('type',Page::$TYPE_BLOG)->orderBy('id','asc')->take(5)->get();
                    $this->dataForView['videos'] = Video::orderby('id','asc')->take(2)->get();
                    $this->dataForView['posts'] = $posts;
                    //dd($posts);
                    break;
                case 'baoming':
                    $this->dataForView['pageTitle'] = 'CFA 报名 | CFA考证 | CFA代报名';
                    $this->dataForView['metaKeywords'] = 'CFA 报名 | CFA考证 | CFA代报名';
                    $this->dataForView['metaDescription'] = '想了解CFA考证各项事宜，请参阅CFA报名流程详解。如果在WinCareer报名CFA保过班，我们免费提供CFA代报名服务。';
                    break;
                default:
                    $this->dataForView['pageTitle'] = 'WIN CAREER';
                    $this->dataForView['metaKeywords'] = '';
                    $this->dataForView['metaDescription'] = '';
                    break;
            }
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