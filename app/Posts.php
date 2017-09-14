<?php
namespace App;

use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********

Class Posts Extends Eloquent{
protected $table = 'posts';
protected $fillable = array('id,title, image, text, user_id, datetime');
public $timestamps = false;

/*public function users() {
    return $this->belongsTo('App\User', name_of_column_in_user_table, name_of_column_in_post_table);
}*/

public function user(){
       return $this->belongsTo('App\User','User_id');
   }
public function comments(){
      return $this->hasMany('App\comments', 'Post_id');
   }
}
