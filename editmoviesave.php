<?php 
session_start(); 
$loggedinID = $_SESSION['userID']; //userid of logged in user

$movieid = $_POST['movieid'];

include("database.php");

		//data from the registration form is set here: 
			if(isset($_POST["movietitle"])) {
				$movietitle = $_POST["movietitle"];
			
			}
			if(isset($_POST["description"])) {
				$description = $_POST["description"];
				
			}
			
			if(isset($_POST["imgfilename"])) {
				$imgfilename = $_POST["imgfilename"];
			}
			
			
			if(($movietitle == NULL) or ($description == NULL) or ($time == NULL)) {
				
				header("Location: editmovie.php");
			}
			
			if(($movietitle != NULL) && ($description != NULL) && ($movietitle != NULL) && ($imgfilename != NULL)) 
			{
						$movietitle;
						$description;
						$imgfilename;
						
						//query to update the data from the form to the movies table
						$query = "update moviesinfo set movietitle='$movietitle',description = '$description',imgfilename = '$imgfilename' where movieid='$movieid'";
						
						$result = mysqli_query($connection, $query);
						
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: managemovies.php");
						} 
			}
			if(($movietitle != NULL) && ($description != NULL) && ($imgfilename == NULL)) {
					
						$movietitle;
						$description;
						
						
						//query to update the data from the form to the movies table
						$query = "update moviesinfo set movietitle='$movietitle',description = '$description' where movieid='$movieid'";
						
						
						$result = mysqli_query($connection, $query);
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: managemovies.php");
						}  
			}
				
mysqli_close($connection);
?>