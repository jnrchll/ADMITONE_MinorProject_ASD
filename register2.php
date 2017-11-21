<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cinemareservationdb";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
	die("database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno(). ")");
}

		//data from the registration form is set here: 
			if(isset($_POST["fname"])) {
				$fname = $_POST["fname"];
			
			}
			if(isset($_POST["lname"])) {
				$lname = $_POST["lname"];
				
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
						
						//query to insert the data from the form to the users table
						$query = "insert into users (firstname, lastname, emailaddress, password) values ('{$fname}','{$lname}','{$emailadd}','{$password1}')";
						
						
						$result = mysqli_query($connection, $query);
						if(!$result){
							header("Location:index.php");
							
						}
						else {
							header("Location: index.php");
						}
					}
				}
	
		
mysqli_close($connection);
?>