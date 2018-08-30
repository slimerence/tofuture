<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/16
 * Time: 10:42
 */

namespace Smartbro\Controllers;

use App\Models\Customer\Wholesaler;
use App\Models\Utils\JsonBuilder;
use App\Models\Utils\UserGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Utils\UserGroup as UserGroupTool;
use App\Events\UserCreated;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Hash;
use App\Models\Newsletter\UserSubscribe;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\CustomizedAuthenticatesUsers;
use Smartbro\Models\Video;
use Smartbro\Models\Cat;
use DB;


class OnlineClassController extends Controller
{
    use CustomizedAuthenticatesUsers;

    public function listen(){
        $this->dataForView['menuName'] = 'listen';
        $this->dataForView['videos'] = Video::orderby('id','asc')->paginate(12);
        $this->dataForView['cats'] = Cat::orderby('id','asc')->get();
        return view(
            _get_frontend_theme_path('customers.online'),
            $this->dataForView
        );
    }

    public function listencat($uri){
        $this->dataForView['menuName'] = 'customer';
        $this->dataForView['videos'] = Video::GetByCat($uri)->paginate(12);
        $this->dataForView['cats'] = Cat::orderby('id','asc')->get();
        return view(
            _get_frontend_theme_path('customers.online'),
            $this->dataForView
        );
    }

    /**
     * Customer Login Check
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login_check(Request $request){
        $this->validateLogin($request);

        $user = User::where('email',$request->get('email'))
            ->where('role',UserGroupTool::$GENERAL_CUSTOMER)
            ->where('status',1)
            ->first();

        if($user && Hash::check($request->get('password'), $user->password)){
            $this->_saveUserInSession($user);

            return redirect('/listen');
        }else{
            $errors = [$this->username() => trans('auth.failed')];

            if ($request->expectsJson()) {
                return response()->json($errors, 422);
            }
            return redirect()->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->withErrors($errors);
        }
    }
}