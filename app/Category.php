<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Table name
    protected $table = 'categories';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function foods(){
        return $this -> belongsToMany('App\Food');
    }
}
