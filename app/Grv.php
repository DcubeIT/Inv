<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grv extends Model
{
    //

    protected $fillabel=[

    	      'name',
    	      'supplier',
            'delevery_date',
            'expire',
            'officer',
            'quantity',
            'user_id',

                     
     ];

      public function user(){
      	return $this->belongsTo('App\User');
      }
       public function siv(){

            return $this->hasMany('App\Siv');
        }

}
