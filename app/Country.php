<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts(){
        // Its mean Country hasMany Post and Many Users as well

        // //--this hasManymethod uses intermediate Table
        // //This (hasmanythrough) method use 2 Tables
        // //return $this->hasManyThrough('App\Post'/*<--first table*/ ,'App\User'/*<--Second Table*/ , 'country_id' /*<-- this id refered to Second table because (Users) table have foregin key of country_id_fk*/);
        
        // // just in case if we have a diffrent name of (user_id) because user_id is bydefault
        // // return $this->hasManyThrough('App\Post' ,'App\User' , 'country_id' , 'the_user_id');
        return $this->hasManyThrough('App\Post' ,'App\User');

    }
}
