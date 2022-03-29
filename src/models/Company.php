<?php
namespace game\models;
class Company extends \Illuminate\Database\Eloquent\Model
{
    protected $table='company';
    protected $primaryKey='id';

    public function platform() {
        return $this->belongsToMany('game\models\Platform',
            'platform','c_id');
    }

    public function game_developpers() {
        return $this->belongsToMany('game\models\Game',
            'game_developers','comp_id','game_id');
    }

    public function game_publishers() {
        return $this->belongsToMany('game\models\Game',
            'game_publishers','comp_id','game_id');
    }

}