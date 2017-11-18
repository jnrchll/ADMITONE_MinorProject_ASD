<?php 
session_start(); 

$userID = $_SESSION['userID'];

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
			if(isset($_POST["cinema"])) {
				$cinema = $_POST["cinema"];
			}
			
			
			if(($movietitle == NULL) or ($description == NULL) or ($cinema == NULL)) {
				
				header("Location: managemovies.php");
			}
			
			if(($movietitle != NULL) && ($description != NULL) && ($movietitle != NULL) && ($imgfilename != NULL) && ($cinema != NULL)) 
			{
				
												
						//query to insert the data from the form to the users table
						$query = "insert into moviesinfo (movietitle, description, imgfilename, cinema) values ('{$movietitle}','{$description}','{$imgfilename}','{$cinema}')";
						
						
						$result = mysqli_query($connection, $query);
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: managemovies.php");
						} 
			}
			if(($movietitle != NULL) && ($description != NULL) && ($imgfilename == NULL) && ($cinema != NULL)) {
					
						
						//query to insert the data from the form to the users table
						$query = "insert into moviesinfo (movietitle, description, cinema) values ('{$movietitle}','{$description}','{$cinema}')";
						
						
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