<?php

return array(
/** set your paypal credential **/
'client_id' =>'AWjhSyfHR95-LIMjg-s4DgZLtZNKMPVUUEemI-28aq025Mc66-EG1pAJvNxLyEc1dvgqkm9DIirJR1xS',
'secret' => 'EEXbVoJbfkbgrRBapNwBM1eCSihePhe9k_LiOLZjU9-TNTYXPuGMjX3rQL-5GwOw_RHHuAk4MviMBofo',
/**
* SDK configuration 
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'live',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);