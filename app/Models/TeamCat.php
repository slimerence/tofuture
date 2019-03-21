<?php

namespace Smartbro\Models;

use Illuminate\Database\Eloquent\Model;

class TeamCat extends Model
{
    protected $fillable = [
        'team_id','cat_id'
    ];

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function cat(){
        return $this->belongsTo(Cat::class);
    }

}
