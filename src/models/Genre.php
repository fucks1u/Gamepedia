<?php
namespace game\models;
class Genre extends \Illuminate\Database\Eloquent\Model
{
    protected $table='genre';
    protected $primaryKey='id';

    public function game() {
        return $this->belongsToMany('models\game',
            'game2genre','genre_id','game_id');
    }

}