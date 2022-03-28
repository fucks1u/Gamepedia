<?php
namespace game\models;
class Game extends \Illuminate\Database\Eloquent\Model
{
    protected $table='game';
    protected $primaryKey='id';

    public function platform() {
        return $this->hasMany('game\models\Platform',
            'id');
    }

    public function theme() {
        return $this->hasMany('game\models\Theme',
            'id');
    }

    public function gamerating() {
        return $this->hasMany('game\models\Game_rating',
            'id');
    }

    public function character() {
        return $this->hasMany('game\models\Character',
            'id');
    }

    public function genre() {
        return $this->hasMany('game\models\Genre',
            'id');
    }

}