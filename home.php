<?php
session_start(); 
$loggedinID = $_SESSION['userID'];

include("menu2.php");
include("database.php");

$query = "SELECT * FROM moviesinfo";
	
$result = mysqli_query($connection, $query);
?>
          		
	<div id="showing">
	<?php
	while($row = mysqli_fetch_array($result))
	{
	?>
		<div class="poster" >
			<div>
				<img src="img/<?php echo $row['imgfilename']; ?>" width="300" height="430">
			</div>
			<div>
				<span id="movietitlelabel">Movie Title:  <?php echo $row['movietitle']; ?></span>
			</div>
			<form action="buyticket.php" method="POST">
			<div>
				<span id="timesched">Time schedule: </span>
					<select name="timesel">
						<option value="10:00AM-12:00PM" selected>10:00AM-12:00PM</option>
						<option value="01:00PM-03:00PM">01:00PM-03:00PM</option>
						<option value="04:00PM-06:00PM">04:00PM-06:00PM</option>	
						<option value="07:00PM-09:00PM">07:00PM-09:00PM</option>
					</select>
			</div>
			<div>				
					<input type="hidden" name="movieid" value="<?php echo $row['movieid']; ?>" >
					<td><input id="type" type="submit" name="buy_ticket" value="Buy Ticket" /></td>
				
			</div>
			</form>
		</div>
	<?php } ?>	
	
	</div>
			
<!-- do not delete -->
		</div>
	</div>
</html>