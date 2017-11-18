<?php 
session_start(); 
$loggedinID = $_SESSION['userID']; //userid of logged in user
	
include("database.php");

		//data from the registration form is set here: 
		
			if(isset($_POST["fname"])) {
				$fname = $_POST["fname"];
			
			}
			if(isset($_POST["lname"])) {
				$lname = $_POST["lname"];
				
			}
			if(isset($_POST["age"])) {
				 $age = $_POST["age"];
				
			}
			if(isset($_POST["emailadd"])) {
				$emailadd = $_POST["emailadd"];
			
			}
			if(isset($_POST["password1"])) {
				$password1 = $_POST["password1"];
				
			}
			
			if(isset($_POST["submit"])){

				if(isset($_POST["password1"])) {
					$password1 = $_POST["password1"];
					$password2 = $_POST["password2"];
					
					if($password1 != $password2 ){
						echo "password does not match";
					}
					else {
						
						//query to insert the data from the form to the users table
						$query = "update users set firstname='$fname',lastname = '$lname',age = '$age',emailaddress = '$emailadd', password = '$password1' where userID='$loggedinID'";
						
					
						$result = mysqli_query($connection, $query);
						
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: myprofile.php");
						}
					}
				}
			}
		
mysqli_close($connection);
?>