<?php

namespace Smartbro\Models;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name','expire',
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

    /**
     * @param $data
     * @return null
     */
    public static function checksame($data){
        $teams = self::orderby('id','asc')->get();
        foreach ($teams as $team){
            $teamid= [];
            foreach ($team->owncats as $owncat){
                $teamid[] = $owncat->cat_id;
            }
            sort($data);
            sort($teamid);
            if($data==$teamid){
                return $team;
            }
        }
        return null;
    }

    public static function teamname($id){
        return self::find($id);
    }

    public function usercount(){
        $users = User::where('group_id',$this->id)->get();
        return count($users);
    }
}
