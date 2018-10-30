<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/23
 * Time: 23:56
 */

namespace Smartbro\Controllers\backend;

use App\User;
use App\Models\Utils\JsonBuilder;
use App\Models\Utils\UserGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Catalog\Product;
use App\Models\Lead;
use Carbon\Carbon;
use App\Models\Catalog\Category;
use App\Models\Utils\UserGroup as UserGroupTool;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use App\Events\UserCreated;
use App\Models\Newsletter\UserSubscribe;
use App\Http\Controllers\Frontend\CustomersController;
use Ramsey\Uuid\Uuid;
use Smartbro\Models\Cat;
use Smartbro\Models\Video;

class VideoController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cat(){
        $this->dataForView['menuName'] = 'Video Category';
        $this->dataForView['pageTitle'] = 'Video Category';
        $this->dataForView['cats'] = Cat::orderby('id','asc')->get();
        return view(_get_frontend_theme_path('admin.cat'),$this->dataForView);
    }

    public function catCreate(Request $request){
        $data= $request->get('cat');

        $this->dataForView['pageTitle'] = 'Video Category';
        $this->dataForView['cats'] = Cat::orderby('id','desc')->get();
        if($cat = Cat::Persistent($data)){
            return back()->with('success','Success!');
        }
        return back()->with('error','Failed!');
    }

    public function catDelete($id){
        Cat::where('id',$id)->forcedelete();
        return redirect('admin/cats');
    }

    public function video(){
        $this->dataForView['menuName'] = 'Video';
        $this->dataForView['pageTitle'] = 'Video';
        $this->dataForView['videos'] = Video::orderby('id','asc')->get();
        $this->dataForView['cats'] = Cat::orderby('id','asc')->get();
        return view(_get_frontend_theme_path('admin.video'),$this->dataForView);
    }
    public function videoCreate(Request $request){
        $data= $request->get('cat');

        $this->dataForView['pageTitle'] = 'Video Category';
        $this->dataForView['cats'] = Cat::orderby('id','desc')->get();
        if($cat = Cat::Persistent($data)){
            return back()->with('success','Success!');
        }
        return back()->with('error','Failed!');
    }
    public function videoDelete($id){
        Video::where('id',$id)->forcedelete();
        return redirect('admin/videos');
    }
    public function videoUploadView(){
        $this->dataForView['menuName'] = 'Video';
        $this->dataForView['pageTitle'] = 'Video';
        $this->dataForView['cats'] = Cat::orderby('id','asc')->get();
        return view(_get_frontend_theme_path('admin.videoup'),$this->dataForView);
    }

    public function videoUpload(Request $request){
        $data = $request->get('video');

        if($video = Video::Persistent($data)){
            return redirect('admin/videos');
        }
        return back()->with('error','Failed!');
    }

    public function bugfix(){
        $data = Video::orderby('id','asc')->get();
        foreach ($data as $video){
            $emba = $video->code;
            if (strpos($emba,'<div style') !==0){
                $embaid = substr($emba,44,9);
                $newcode = '<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/'.$embaid.'?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';
                Video::where('id',$video->id)->update(['code'=>$newcode]);
            };
        }

    }
}