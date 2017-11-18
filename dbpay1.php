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
			if(isset($_POST["cardbank"])) {
				$cardbank = $_POST["cardbank"];
			
			}
			if(isset($_POST["cardno"])) {
				$cardno = $_POST["cardno"];
				
			}
			
			
			if(isset($_POST["submit"])){

						
						//query to insert the data from the form to the users table
						$query = "insert into paymentinfo1 (creditcardbank, creditcardnum) values ('{$cardbank}','{$cardno}')";
						
						
						$result = mysqli_query($connection, $query);
						if(!$result){
							die("database query failed");
						}
					}
	
		
mysqli_close($connection);
?>