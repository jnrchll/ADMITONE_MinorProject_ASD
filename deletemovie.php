<?php 
session_start(); 
$loggedinID = $_SESSION['userID']; //userid of logged in user

$movieid = $_POST['movieid'];

include("database.php");

$query = "delete from moviesinfo where movieid='$movieid'";

$result = mysqli_query($connection, $query);

if(!$result){
	die("database query failed");
}
else {
	header("Location: managemovies.php");
}  
			
				
mysqli_close($connection);
?>