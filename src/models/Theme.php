<?php
namespace game\models;
class Theme
{
    protected $table='theme';
    protected $primaryKey='id';

    public function game() {
        return $this->belongsToMany('game\models\Game',
            'game2theme');
    }
}