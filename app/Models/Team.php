<?php

namespace Smartbro\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
    ];
    public $dates = [
        'expire','created_at','updated_at'
    ];

    public function owncats(){
        return $this->hasMany(TeamCat::class);
    }

    public function ownusers(){
        return $this->hasMany(UserTeam::class);
    }

    public function checkstatus(){
        $now = Carbon::now();
        if($this->expire < $now){
            return false;
        }else{
            return true;
        }
    }
}
