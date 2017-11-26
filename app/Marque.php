<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model 
{

    protected $table = 'Marque';
    public $timestamps = true;

    protected $fillable = ['id','name'];
    protected $visible =['id','name'];

    public function products()
    {
        return $this->hasMany(\App\Product::class,'id','marqueid');
    }


}