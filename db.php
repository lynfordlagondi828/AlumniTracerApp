<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'norsu_bsc';
 
$db = new mysqli($db_host, $db_username, $db_password, $db_name);
 
if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}