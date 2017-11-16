<?php 
session_start(); 


if(!isset($task)) {
	$task = "nologin";
} 

if($task =="nologin") {
	include("menu1.php");
	include("index2.php");

}





?>
