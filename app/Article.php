<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Table Name -> by default: articles; new specification:
    // protected $table= 'name';

    //custom Primary Key specification:
    //public $primaryKey = 'id';

    //custom Timestamps specification:
    //public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

}
