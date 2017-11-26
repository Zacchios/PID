<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{

    protected $table = 'Product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id',
        'name', 'reference', 'media','unitprice','stock', 'promotion','marqueid',
    ];
    public $timestamps = true;

    public function marque()
    {
        return $this->belongsTo(\App\Marque::class,'marqueid','id');
    }
}