<?php
session_start(); 

$loggedinID = $_SESSION['userID'];

$time = $_POST['time'];
$seatnum = $_POST['seatnum'];
$movieid = $_POST['movieid'];

include("menu2.php");
include("database.php");

$query = "SELECT * FROM moviesinfo";
$result = mysqli_query($connection, $query);


?>
<div id="seatinfocontainer">
	<div id="totalpayment">
		<h1>Selected Seat #: <?php echo $seatnum; ?></h1>
		<h1>Number of Seats: 1 </h1>
		<h1>Ticket Price: Php 300.00 </h1>
		<h1>Total Amount: Php 300.00 </h1>
	</div>
	
	<div class="infoform">
			<h5>Please fill up customer's info</h5>
				<form action="final.php" method="POST">
				<table>
					<tr>
						<td><div >First Name: </div></td>
						<td><input type="text" name="customerfname" value="" /></td>
					</tr>
					<tr>
						<td><div >Last Name: </div></td>
						<td><input type="text" name="customerlname" value="" /></br></td>
					</tr>
					<tr>
						<td><div >Age: </div></td> 
						<td><input type="text" name="age" value="" /></br></td>
					</tr>
					<tr>
						<td><div >Contact Number: </div></td>
						<td><input type="text" name="contactnum" value="" /></br></td>
					</tr>
					<tr>
						<td><div >Card #: </div></td>
						<td><input type="text" name="cardnum" value="" /></br></td>
					</tr>
					<tr>
						<td><div >Card Name: </div></td>
						<td><input type="text" name="cardname" value="" /></br></td>
					</tr>
					<tr>
						<td><div >Expiry Date (mm/yyyy): </div></td>
						<td><input type="text" name="expdate" value="" /></br></td>
					</tr>
					<tr>
						<td><div >Security Code: </div></td>
						<td><input type="text" name="seccode" value="" /></br></td>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="time" value="<?php echo $time; ?>" >
							<input type="hidden" name="seatnum" value="<?php echo $seatnum; ?>" >
							<input type="hidden" name="movieid" value="<?php echo $movieid; ?>" >
							<input id="type" type="submit" name="submit" value="SUBMIT" />
						</td>
					</tr>
				</ul>
				</form>
			</div>
</div>

	
<!-- do not delete -->
		</div>
	</div>
</html>