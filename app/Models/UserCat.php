<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/27
 * Time: 10:10
 */

namespace Smartbro\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class UserCat extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id','cat_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cat(){
        return $this->belongsTo(Cat::class);
    }

    public static function Persistent($user,$data){
        self::where('user_id',$user->id)->delete();

        $cats = [];
        foreach ($data as $key=>$cat){
            $cats[]=self::create(
                [
                    'user_id'=>$user->id,
                    'cat_id'=>$cat,
                ]
            );
        };
        return $cats;
    }

    public static function GetOwnCat($user){
        return self::where('user_id',$user->id)->get();
    }
}