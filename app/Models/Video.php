<?php

namespace Smartbro\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use Carbon\Carbon;
use Smartbro\Models\Cat;

class Video extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'cat_id',
        'code'
    ];
    public $dates = [
        'created_at','updated_at'
    ];

    public static function Persistent($data){
        return self::create($data);
    }

    public static function GetByCat($caturi){
        $cat = Cat::where('name',$caturi)->first();
        return Video::where('cat_id',$cat->id)->orderBy('name','asc');
    }
}
