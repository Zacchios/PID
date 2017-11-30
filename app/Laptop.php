<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model 
{

    protected $table = 'Laptop';
    public $timestamps = true;


    protected $fillable=['laptopid','processor','graphiccard','thumbscreen','weight','typeid'];

    public function type()
    {
        return $this->belongsTo(\App\Type::class,'typeid','id');
    }

    public function product()
    {
        return $this->belongsTo(\App\Product::class,'laptopid','id');
    }


}