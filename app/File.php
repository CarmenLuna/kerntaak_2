<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['subject', 'year', 'level'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function uploads(){
        return $this->hasOne(Upload::class);
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        self::deleting(function (File $file){

            unlink(realpath('../storage/app/'.$file->upload->filename));
            $file->upload->delete();
        });
    }

}