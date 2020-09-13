<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    protected $fillable = ['partOfSpeech', 'definition', 'word_id'];
    protected $hidden = ['word_id', 'created_at', 'updated_at'];

    public function word()
    {
        return $this->belongsTo('App\Word', 'word_id');
    }
}
