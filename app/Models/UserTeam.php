<?php

namespace Smartbro\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserTeam extends Model
{
    protected $fillable = [
        'team_id','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }


}
