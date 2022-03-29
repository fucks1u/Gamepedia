<?php
namespace game\models;
class Game extends \Illuminate\Database\Eloquent\Model
{
    protected $table='game';
    protected $primaryKey='id';

    public function platform() {
        return $this->belongsToMany('game\models\Platform',
            'game2platform');
    }

    public function theme() {
        return $this->belongsToMany('game\models\Theme',
            'game2theme');
    }

    public function gamerating() {
        return $this->belongsToMany('game\models\Game_rating',
            'game2rating');
    }

    public function character() {
        return $this->belongsToMany('game\models\Character',
            'game2character');
    }

    public function genre() {
        return $this->belongsToMany('game\models\Genre',
            'game2genre');
    }

}