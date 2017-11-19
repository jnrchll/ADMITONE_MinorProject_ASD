<?php
session_start(); 

$userID = $_SESSION['userID'];
				
include("menu2.php");

include("database.php");


?>          		
	<div id="showing">
<div id = "movies">
	
	<table id="movieinfo">
		<tr >
			<td id="theader" class="seatnum"><div>SEAT NUMBER</div></td>
			<td id="theader" class="cinnum"><div>CINEMA NUMBER</div></td>
			<td id="theader" class="movieid"><div>MOVIE ID </div></td>
			<td id="theader" class="time"><div>TIME </div></td>
			<td id="theader" class="customerfname"><div>Customer FirstName</div></td>
			<td id="theader" class="customerlname"><div>Customer LastName </div></td>
			<td id="theader" class="customerage"><div>Age </div></td>
			<td id="theader" class="contactnum"><div>Contact Number </div></td>
		</tr>
	<?php
			$query = "SELECT * FROM ticketreservation";
	
			$result = mysqli_query($connection, $query);
			
			while($row = mysqli_fetch_array($result))
			{ 
			?>
			<tr>
						<td class="ticketreservationID"><div><?php echo $row['ticketreservationID']; ?></div></td>
						<td class="seatnum"><div><?php echo $row['seatnum']; ?></div></td>
						<td class="cinnum"><div><?php echo $row['cinema']; ?></div></td>
						<td class="movieid"><div><?php echo $row['movieid']; ?></div></td>
						<td class="time"><div><?php echo $row['time']; ?></div></td>
						<td class="customerfname"><div><?php echo $row['customerfname']; ?></div></td>
						<td class="customerlname"><div><?php echo $row['customerlname']; ?></div></td>
						<td class="customerage"><div><?php echo $row['customerage']; ?></div></td>
						<td class="contactnum"><div><?php echo $row['contactnum']; ?></div></td>
						<td class="action">
							<form action="deleteinfo.php" method="POST">
								<input id="in" type="submit" name="delete" value="Delete" />
								<input id="in"type="hidden" name="ticketreservationID" value="<?php echo $row['ticketreservationID']; ?>" >
							</form>
						</td>
					</tr>
				
			<?php
			}	
?>
	</table>