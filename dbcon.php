<?php
const DB_HOST = 'matbunger.dk.mysql';
const DB_USER = 'matbunger_dk';
const DB_PASS = 'Santa12594';
const DB_NAME = 'matbunger_dk';
$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset("utf8"); 
?>