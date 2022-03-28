<?php
namespace game\models;
class Company extends \Illuminate\Database\Eloquent\Model
{
    protected $table='company';
    protected $primaryKey='id';

    public function platform() {
        return $this->hasMany('game\models\platform',
            'id');
    }

    public function game() {
        return $this->hasMany('game\models\game',
            'id');
    }

}