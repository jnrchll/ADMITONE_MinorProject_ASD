<?php 
session_start(); 
$loggedinID = $_SESSION['userID']; //userid of logged in user

$ticketreservationID = $_POST['ticketreservationID'];

include("database.php");

$query = "delete from ticketreservation where ticketreservationID='$ticketreservationID'";

$result = mysqli_query($connection, $query);

if(!$result){
	die("database query failed");
}
else {
	header("Location: managereservations.php");
}  
			
				
mysqli_close($connection);
?>