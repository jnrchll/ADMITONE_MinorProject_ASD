<?php 
session_start(); 
$loggedinID = $_SESSION['userID']; //userid of logged in user

$movieid = $_POST['movieid'];

include("database.php");

		//data from the registration form is set here: 
			if(isset($_POST["movietitle"])) {
				$movietitle = $_POST["movietitle"];
			
			}
			
			if(isset($_POST["imgfilename"])) {
				$imgfilename = $_POST["imgfilename"];
			}
			
			
			if($movietitle == NULL) {
				
				header("Location: editcs.php");
			}
			
			if(($movietitle != NULL) && ($imgfilename != NULL)) 
			{
						$movietitle;
						$imgfilename;
						
						//query to update the data from the form to the movies table
						$query = "update csinfo set movietitle='$movietitle',imgfilename = '$imgfilename' where movieid='$movieid'";
						
						$result = mysqli_query($connection, $query);
						
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: managecomingsoon.php");
						} 
			}
			if(($movietitle != NULL) && ($imgfilename == NULL)) {
					
						$movietitle;
						
						
						//query to update the data from the form to the movies table
						$query = "update csinfo set movietitle='$movietitle' where movieid='$movieid'";
						
						
						$result = mysqli_query($connection, $query);
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: managecomingsoon.php");
						}  
			}
				
mysqli_close($connection);
?>