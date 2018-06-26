<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siv extends Model
{
    //
     protected $fillabel=[
    	'name',
        'quantity',
        'issue_date',
        'issue_to',
        'officer',
        'item_id',
        'user_id',

                     
     ];

     public function user(){
      	return $this->belongsToMany('App\User');
      }

      public function grv(){
      	return $this->belongsTo('App\Grv');
      }
}
