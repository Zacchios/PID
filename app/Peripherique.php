<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peripherique extends Model 
{

    protected $table = 'Peripherique';
    public $timestamps = true;


    protected $fillable=['peripheriqueid','processor','graphiccard','thumbscreen','weight','typeid'];

    public function type()
    {
        return $this->belongsTo(\App\Type::class,'typeid','id');
    }

    public function product()
    {
        return $this->belongsTo(\App\Product::class,'peripheriqueid','id');
    }


}