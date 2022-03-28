<?php
namespace game\models;
class Patform extends \Illuminate\Database\Eloquent\Model
{
    protected $table='platform';
    protected $primaryKey='id';

    public function company() {
        return $this->belongsTo('game\models\company',
            'id');
    }

    public function game() {
        return $this->hasMany('game\models\game',
            'id');
    }
}