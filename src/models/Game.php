<?php
namespace game\models;
class Game extends \Illuminate\Database\Eloquent\Model
{
    protected $table='game';
    protected $primaryKey='id';

    public function platform() {
        return $this->belongsToMany('game\models\Platform',
            'game2platform','game_id','platorm_id');
    }

    public function theme() {
        return $this->belongsToMany('game\models\Theme',
            'game2theme','game_id','theme_id');
    }

    public function raiting() {
        return $this->belongsToMany('game\models\Game_rating',
            'game2rating','game_id','rating_id');
    }
    public function ratingboard() {
        return $this->belongsTo('game\models\Rating_board',
            'rating_board_id');
    }

    public function character() {
        return $this->belongsToMany('game\models\Character',
            'game2character','game_id','character_id');
    }

    public function genre() {
        return $this->belongsToMany('game\models\Genre',
            'game2genre','game_id','genre_id');
    }

    public function game_developpers() {
        return $this->belongsToMany('game\models\Company',
            'game_developers','game_id','comp_id');
    }

    public function game_publishers() {
        return $this->belongsToMany('game\models\Company',
            'game_publishers','game_id','comp_id');
    }

}