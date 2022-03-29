<?php
namespace game\models;
class Platform extends \Illuminate\Database\Eloquent\Model
{
    protected $table='platform';
    protected $primaryKey='id';

    public function company() {
        return $this->belongsTo('game\models\Company',
            'c_id');
    }

    public function game() {
        return $this->belongsToMany('game\models\Game',
            'game2platform','platform_id','game_id');
    }
}