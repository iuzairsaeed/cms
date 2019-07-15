<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post(){

        //there is  user id bydefault || hasOne('App\Post' , 'user_id') <--like this
        return $this->hasOne('App\Post');
        //here you can specify attribute name of the table which has relationship with other table
        // return $this->hasOne('App\Post' , 'shop_id_fk');


    }

    public function posts(){
        
        return $this->hasMany('App\Post');

    }

    public function roles(){

        
        //return $this->belongsToMany('App\Role');

        // // Below format customize the foreign keys which are linked with that table where 
        // role_user is table and user(user_id) and roles(role_id) is foreighnkeys 
        
        // //normal acces pivot table
        // return $this->belongsToMany('App\Role' , 'role_user' , 'user_id' , 'role_id');
    
        // //customize acces for pivot tables
        return $this->belongsToMany('App\Role' , 'role_user' , 'user_id' , 'role_id')->withPivot('created_at','updated_at');
    
    }

    public function photo(){
        #imageable is a function name which is in a Photo Model
        return $this->morphMany('App\Photo' , 'imageable');
    }

    public function getNameAttribute($value){
        return lcfirst($value);
        // return strtoupper($value);
        // return strtolower($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }

    

    
}
