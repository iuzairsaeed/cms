<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // //My code for getting user by find Role
    // // k is role me kitnay users hai its many2many
    // public function userRole(){
    //     return $this->belongsToMany('App\User');
    // }


    // //Edwin  Code but its for UserModel i coded here by MISTAKE
    // // //=====MISTAKE=====
    // public function userRole(){
        
    //     return $this->belongsToMany('App\User')->withPivot('name','created_at','updated_at');
    
    // }
    // // //==========MISTAKE======

}
