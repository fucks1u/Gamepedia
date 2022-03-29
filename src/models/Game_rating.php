<?php
namespace game\models;
class Game_rating extends \Illuminate\Database\Eloquent\Model
{
    protected $table='game_rating';
    protected $primaryKey='id';

    public function games() {
        return $this->belongsToMany('game\models\Rating_board',
            'game2rating', 'rating_id', 'game_id');
    }

    public function ratingboard() {
        return $this->belongsTo('game\models\Rating_board',
            'rating_board_id');
    }
}