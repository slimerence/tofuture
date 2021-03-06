<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/25
 * Time: 11:22
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
use Smartbro\Models\Team;
use Smartbro\Models\Video;
use Smartbro\Models\UserCat;

class AdminController extends CustomersController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->dataForView['menuName'] = 'dashboard';
        $this->dataForView['config'] = Configuration::find(1);
        $this->dataForView['products'] = Product::orderBy('id','desc')->paginate(config('system.PAGE_SIZE'));
        $this->dataForView['users'] = User::where('group_id','1')->orderBy('id','desc')->get();
        $this->dataForView['leads'] = Lead::orderBy('id','desc')
            ->paginate(config('system.PAGE_SIZE'));
        $this->dataForView['videos'] = Video::orderby('id','asc')->get();
        $this->dataForView['cats'] = Cat::orderby('id','asc')->get();
        return view(_get_frontend_theme_path('admin.index'), $this->dataForView);
    }

    public function tables(){
        $this->dataForView['menuName'] = 'tables';
        $this->dataForView['pageTitle'] = 'All Reservations';
        $this->dataForView['config'] = Configuration::find(1);
        $this->dataForView['reservations']=  Reservation::orderBy('at','asc')->orderBy('created_at','asc')->get();
        return view(_get_frontend_theme_path('admin.tables'), $this->dataForView);
    }

    public function tablescoming(){
        $this->dataForView['menuName'] = 'tables';
        $this->dataForView['pageTitle'] = 'Coming Reservations';
        $this->dataForView['config'] = Configuration::find(1);
        $this->dataForView['reservations']=  Reservation::GetComingReservations();
        return view(_get_frontend_theme_path('admin.tables'), $this->dataForView);
    }


    public function update($id,Request $request){
        $reservation = $request->get('reservation');
        $reservation['name'] = $reservation['firstname'].' '.$reservation['lastname'];
        $str = $reservation['at_date'].' '.$reservation['at_time'];
        $reservation['at']= Carbon::createFromFormat('Y-m-d H:i',$str,'Australia/Melbourne');
        Reservation::find($id)->update($reservation);
        return redirect('/admin/home');
    }

    public function customer(){
        $this->dataForView['menuName'] = 'tables';
        $this->dataForView['config'] = Configuration::find(1);
        $this->dataForView['users'] = User::where('role','5')->orderBy('id','desc')->get();
        return view(_get_frontend_theme_path('admin.customers'), $this->dataForView);
    }

    public function customerCreateView(){
        $this->dataForView['menuName'] = 'tables';
        $this->dataForView['config'] = Configuration::find(1);
        $this->dataForView['users'] = User::where('role','5')->orderBy('id','desc')->get();
        $this->dataForView['cats'] = Cat::LoadChildCat();
        $this->dataForView['teams'] = Team::orderby('id','asc')->get();
        return view(_get_frontend_theme_path('admin.create'), $this->dataForView);
    }

    public function customerDelete($id){
        User::where('id',$id)->forcedelete();
        UserCat::where('user_id',$id)->forcedelete();
        return redirect('admin/customers');
    }

    public function customerUpdate($id){
        $this->dataForView['pageTitle'] = 'User Update';
        $this->dataForView['customer']= User::find($id);
        $this->dataForView['cats'] = Cat::LoadChildCat();
        $this->dataForView['teams'] = Team::orderby('id','asc')->get();
        return view(_get_frontend_theme_path('admin.update'),$this->dataForView);
    }
    public function customerApply(Request $request){
        $data = $request->all();
        User::orderby('id','desc')->update(['group_id'=>$data['team']]);
        return redirect('admin/customers');
    }


    public function customerEdit($id,Request $request){
        $data = $request->all();
        $data['group_id'] = $data['team'];
        User::find($id)->update($data);
       /* $user =  User::where('id',$id)->first();
        if (!isset($data['cat'])) {
            $data['cat'] = [''];
        }

        UserCat::Persistent($user,$data['cat']);*/
        return redirect('admin/customers');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function save(Request $request){
        $data=$request->all();
        // 获取Referer
        $rules = [
            'name' => 'required|string|max:30',
            'email' => 'required|string|email|max:50|unique:users',
            'phone'=>'required|numeric',
            'password'=>'required|string|min:6|confirmed',
        ];
        $validator = Validator::make($data, $rules);
        $validator->validate();
        // 用户有一个默认的密码
        $initPassword = '123456';
        if(isset($data['password'])){
            $initPassword = $data['password'];
        }

        $userData = [
            'uuid'=>Uuid::uuid4()->toString(),
            'password'=>Hash::make($initPassword),
        ];
        $data['uuid'] = $userData['uuid'];
        $data['password'] = $userData['password'];
        $data['role'] = UserGroup::$GENERAL_CUSTOMER;
        $data['group_id'] = $data['team'];
        $user=User::create($data);
        if($user){
            return redirect('admin/customers');
        }else{
            return back()->with('error','Something wrong!');
        }
    }
}