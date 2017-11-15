<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model 
{

    protected $table = 'Role';
    public $timestamps = true;

    protected $fillable = ['id','name',];

    public function users()
    {
        return $this->hasMany(\App\User::class,'id','roleid');
    }

}