<?php
$db_host 		= "localhost"; # Database Host
$db_user 		= 'postgres'; # Database Username
$db_password 	= 'mario251985'; # Database Password
//$port="5432";
$db_name 		= 'db_sol-contri'; # Database Name
//$dbh = new PDO("pgsql:dbname=$db_name;host=$db_host;port=$port", $db_user, $db_password); 
define('APP_URL', 'http://localhost/ibilling'); # Application URL.
#Please include http and do not use trailing slash after the url. For example use in this format- http://www.example.com Or http://www.example.com/finance
$_app_stage = 'Live'; # Change Live to Dev to enable Debug
