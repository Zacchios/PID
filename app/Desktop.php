<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desktop extends Product
{

    protected $table = 'Desktop';
    public $timestamps = true;

    protected $fillable=['desktopid','processor','graphiccard','thumbscreen','weight','typeid'];

    public function type()
    {
        return $this->belongsTo(\App\Type::class,'typeid','id');
    }

    public function product()
    {
        return $this->belongsTo(\App\Product::class,'desktopid','id');
    }

}