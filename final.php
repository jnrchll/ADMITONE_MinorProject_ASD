<?php 
session_start(); 

$userID = $_SESSION['userID'];

include("database.php");


		//data from the form is set here: 
			if(isset($_POST["customerfname"])) {
				$customerfname = $_POST["customerfname"];
			}
			
			if(isset($_POST["customerlname"])) {
				$customerlname = $_POST["customerlname"];
			}
			
			if(isset($_POST["age"])) {
				$customerage = $_POST["age"];
			}
			
			if(isset($_POST["contactnum"])) {
				$contactnum= $_POST["contactnum"];
			}
			
			if(isset($_POST["time"])) {
				$time= $_POST["time"];
			}
			
			if(isset($_POST["seatnum"])) {
				$seatnum= $_POST["seatnum"];
			}
			
			if(isset($_POST["movieid"])) {
				$movieid= $_POST["movieid"];
			}
			
			//to get the cinema#
						$getcinema = "select * from moviesinfo where movieid='$movieid'";		
						$result1 = mysqli_query($connection, $getcinema);	
						while($row1 = mysqli_fetch_array($result1))
						{
							$cinema = $row1['cinema'];
						}
			
			if(($customerfname == NULL) or ($customerlname == NULL) or ($customerage == NULL) or ($contactnum == NULL)) {
				
				header("Location: home.php");
			}
			
			if(($customerfname != NULL) or ($customerlname != NULL) or ($customerage != NULL) or ($contactnum != NULL)) {
						
				$query2 = "insert into ticketreservation (seatnum, cinema, movieid, time, reservedby_userID, customerfname, customerlname, customerage, contactnum) values ('{$seatnum}','{$cinema}','{$movieid}','{$time}','{$userID}','{$customerfname}','{$customerlname}','{$customerage}','{$contactnum}')";
							
				$result2 = mysqli_query($connection, $query2);
				
				if(!$result2){
					die("database query failed");
				}
				else {
					$lastid = mysqli_insert_id($connection); //get the ID of the last insert
				
					//get the ticket info of the latest insert
					$query3 = "SELECT * FROM ticketreservation as a inner join moviesinfo as b on a.movieid=b.movieid where a.ticketreservationid='$lastid'";
					$result3 = mysqli_query($connection, $query3);
					
					while($row3 = mysqli_fetch_array($result3))
					{
					
						include("menu2.php");
						?>
						<div id="thankyou1">
							<h1>Transaction Successful! Thank You!</h1>
							<table id="receipt">
								<tr>
									<td></br></br></br> Name:</td>
									<td></br></br></br> <?php echo $row3['customerfname']." ".$row3['customerlname']; ?></td>
								</tr>
								<tr>
									<td> Seat #:</td>
									<td> <?php echo $row3['seatnum']; ?></td>
								</tr>
								<tr>
									<td> Cinema #:</td>
									<td> <?php echo $row3['cinema']; ?></td>
								</tr>
								<tr>
									<td> Movie:</td>
									<td> <?php echo $row3['movietitle']; ?></td>
								</tr>
								<tr>
									<td> Time:</td>
									<td> <?php echo $row3['time']; ?></td>
								</tr>
							</table>
						</div>
					
					<?php
					}
				}  
			}
			   
			
			
		
mysqli_close($connection);
?>