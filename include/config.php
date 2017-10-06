<?php

if(!defined('_CONFIG_')){
  exit('You are missing a config file');
}


//Include DB.php

include_once "classes/DB.php";

$con = DB::getConnection();

 ?>
