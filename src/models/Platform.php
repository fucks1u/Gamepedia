<?php
namespace game\models;
class Platform extends \Illuminate\Database\Eloquent\Model
{
    protected $table='platform';
    protected $primaryKey='id';

    public function company() {
        return $this->belongsTo('game\models\company',
            'c_id');
    }

    public function game() {
        return $this->belongsToMany('game\models\game',
            'game2platform','platform_id','game_id');
    }
}