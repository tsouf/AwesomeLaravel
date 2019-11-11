<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // Table name
    protected $table = 'foods';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function users(){
        return $this -> belongsToMany('App\User');
    }

    public function categories(){
        return $this -> belongsToMany('App\Category');
    }
}
