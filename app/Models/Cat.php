<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/23
 * Time: 15:38
 */

namespace Smartbro\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Smartbro\Models\UserCat;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cat extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
    ];
    public $dates = [
        'created_at','updated_at'
    ];

    /**
     * 取得当前目录的父级目录
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent(){
        return $this->belongsTo(self::class,'parent_id');
    }

    /**
     * 取得当前目录对象的下一级目录
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children(){
        return $this->hasMany(self::class,'parent_id');
    }

    /**
     * 获取第一级别的目录
     */
    public static function LoadFirstLevelCatsInMenu(){
        return self::where('parent_id',1)
            ->get();
    }

    public static function LoadChildCat(){
        return self::where('parent_id',2)->orderby('id','asc')
            ->get();
    }

    public static function GetCatLevel($id){
        $cat = self::where('id',$id)->first();
        if($cat->id == 1){
            $level = 0;
        }
        else{
            $level = 1;
            while ($cat->parent_id != 1 ){
                $cat = $cat->parent()->first();
                $level ++;
            };
        }
        return $level;
    }

    public static function Persistent($data){
        return self::create($data);
    }

}