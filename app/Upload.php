<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = ['fillable'];


    public function user(){
        return $this->belongsTo(User::class);

    }

    public function files(){
        return $this->belongsTo(User::class);
    }

}
