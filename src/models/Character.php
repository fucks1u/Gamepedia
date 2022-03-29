<?php
namespace game\models;
class Character extends \Illuminate\Database\Eloquent\Model
{
    protected $table='character';
    protected $primaryKey='id';


    public function game() {
        return $this->belongsToMany('game\models\game',
            'game2character');
    }

}