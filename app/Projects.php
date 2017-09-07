<?php
namespace App;

use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********

Class Projects Extends Eloquent{
protected $table = 'projects';
protected $fillable = array('id,name, image_url,state,  description, User_id');
public $timestamps = false;

/*public function users() {
    return $this->belongsTo('App\User', name_of_column_in_user_table, name_of_column_in_post_table);
}*/

public function user(){
       return $this->belongsTo('App\User','User_id');
   }
}
