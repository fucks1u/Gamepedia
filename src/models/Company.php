<?php
namespace game\models;
class Company extends \Illuminate\Database\Eloquent\Model
{
    protected $table='company';
    protected $primaryKey='id';

    public function platform() {
        return $this->belongsTo('game\models\platform',
            'c_id');
    }

    public function game() {
        return $this->belongsToMany('game\models\game',
            'game_publishers','comp_id','game_id');
    }

}