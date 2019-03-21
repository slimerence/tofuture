<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/20
 * Time: 12:08
 */

namespace Smartbro\Controllers\backend;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Smartbro\Models\Team;
use Smartbro\Models\Cat;
use Smartbro\Models\TeamCat;
use Smartbro\Models\UserCat;

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
        if (!isset($data['cat'])) {
            $data['cat'] = [''];
        }
        $cats = $data['cat'];
        $team = Team::create($data['team']);
        if($team){
            TeamCat::Persistent($team,$cats);
            return redirect('admin/team');
        }else{
            return back()->with('error','Something wrong!');
        }
/*            UserCat::Persistent($user,$cats);*/
    }

    public function teamupview($id){
        $team = Team::find($id);
        $this->dataForView['menuName'] = 'Group Update';
        $this->dataForView['pageTitle'] = 'Group Update';
        $this->dataForView['teams'] = Team::orderby('id','asc')->get();
        $this->dataForView['team'] = $team;
        $this->dataForView['cats'] = Cat::orderby('id','asc')->get();
        return view(_get_frontend_theme_path('admin.group.teamup'),$this->dataForView);
    }

    public function teamup(Request $request){
        $data = $request->all();
        $id = $data['team_id'];
        Team::where('id',$id)->update($data['team']);
        $team = Team::find($id);
        if (!isset($data['cat'])) {
            $data['cat'] = [''];
        }
        $cats = $data['cat'];
        TeamCat::Persistent($team,$cats);
        return redirect('admin/team');
    }
    
    public function teamd($id){

    }

    /**
     * 自动生成新的用户组并检查是否有类似组的功能
     */

    public function userfix(){
        $users = User::orderby('id','asc')->get();
        foreach ($users as $key=>$user){
            if($user->group_id==1){
                $cats = UserCat::GetCat($user);
                //dump($cats);
                $result = Team::checksame($cats);
                if($result && !is_null($result)){
                   User::where('id',$user->id)->update(['group_id'=>$result->id]);
                }else{
                    $team = Team::create(['name'=>'Auto Generate'.$key, 'expire'=>'2100-01-01']);
                    TeamCat::Persistent($team,$cats);
                    User::where('id',$user->id)->update(['group_id'=>$team->id]);
                }
            }
        }
        return redirect('admin/customers');
    }
}