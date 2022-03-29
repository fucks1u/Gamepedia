<?php
namespace game\models;
class Game_rating
{
    protected $table='game_rating';
    protected $primaryKey='id';

    public function rating_board() {
        return $this->belongsTo('game\models\Rating_board',
            'rating_board_id');
    }
}