<?php
namespace App;

use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********

Class Subscribers Extends Eloquent{
protected $table = 'subscribers';
protected $fillable = array('email');
public $timestamps = false;

}
