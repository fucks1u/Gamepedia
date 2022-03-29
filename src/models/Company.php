<?php
namespace game\models;
class Company extends \Illuminate\Database\Eloquent\Model
{
    protected $table='company';
    protected $primaryKey='id';

    public function platform() {
        return $this->belongsToMany('game\models\platform',
            'game_developers');
    }

    public function game() {
        return $this->belongsToMany('game\models\game',
            'game_publishers');
    }

}