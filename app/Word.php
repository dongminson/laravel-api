<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['word'];
    protected $hidden = ['created_at', 'updated_at'];

    public function definitions(){
        return $this->hasMany('App\Definition');
    }
}
