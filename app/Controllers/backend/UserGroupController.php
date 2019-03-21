<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/20
 * Time: 12:08
 */

namespace Smartbro\Controllers\backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Smartbro\Models\Team;
use Smartbro\Models\Cat;

class UserGroupController extends Controller
{
    public function team(){
        $this->dataForView['menuName'] = 'Group Management';
        $this->dataForView['pageTitle'] = 'Group Management';
        $this->dataForView['teams'] = Team::orderby('id','asc')->get();
        $this->dataForView['cats'] = Cat::orderby('id','asc')->get();

        return view(_get_frontend_theme_path('admin.group.team'),$this->dataForView);
    }

    public function newteam(Request $request){
        $data = $request->all();

    }
}