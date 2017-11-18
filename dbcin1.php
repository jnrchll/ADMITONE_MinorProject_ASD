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
			if(isset($_POST["age"])) {
				 $age = $_POST["age"];
				
			}
			if(isset($_POST["contactno"])) {
				$contactno = $_POST["contactno"];
			
			}
			
			if(isset($_POST["submit"])){

						
						//query to insert the data from the form to the users table
						$query = "insert into cinema1info (firstname, lastname, age, contactnum) values ('{$fname}','{$lname}',{$age},'{$contactno}')";
						
						
						$result = mysqli_query($connection, $query);
						if(!$result){
							die("database query failed");
						}
						else {
							header("Location: pay1.php");
						}
					}
	
		
mysqli_close($connection);
?>