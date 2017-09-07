<?php
namespace App;

use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********

Class Comments Extends Eloquent{
protected $table = 'comment';
protected $fillable = array('id,comment, Post_id, User_id');
public $timestamps = false;

/*public function users() {
    return $this->belongsTo('App\User', name_of_column_in_user_table, name_of_column_in_post_table);
}*/

public function user(){
       return $this->belongsTo('App\User','User_id');
   }

  public function posts(){
       return $this->belongsTo('App\User', 'Post_id');
  }
}
