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


    public static function Persistent($team,$data){
        self::where('team_id',$team->id)->delete();
        $cats = [];
        if(!($data==[''])) {
            foreach ($data as $key => $cat) {
                $cats[] = self::create(
                    [
                        'team_id' => $team->id,
                        'cat_id' => $cat,
                    ]
                );
            };
        }
        return $cats;
    }

    /**
     * @return mixed
     */
    public function GetOwnCat(){
        return self::where('team_id',$this->id)->get();
    }
}
