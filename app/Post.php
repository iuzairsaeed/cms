<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
//    use SoftDeletes;

//    protected $dates = ['deleted_at'];

//     protected $table = 'posts';
//
//     protected $primaryKey = 'post_id';

    protected $fillable = [

        'title',
        'content',
        'path'

    ];

    public function user(){

        return $this->belongsTo('App\User');
    
    }

    public function photo(){
        return $this->morphMany('App\Photo' , 'imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Tag' , 'taggable');
    }

    public static function scopeLatest($query){
        return $query->orderBy('id' , 'asc')->get();
    }

}














