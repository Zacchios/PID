<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model 
{

    protected $table = 'Type';
    public $timestamps = true;

    protected $fillable = ['id','name',];

    public function desktop()
    {
        return $this->hasMany(\App\Desktop::class,'id','typeid');
    }

    public function laptop()
    {
        return $this->hasMany(\App\Laptop::class,'id','typeid');
    }

    public function peripherique()
    {
        return $this->hasMany(\App\Peripherique::class,'id','typeid');
    }

}