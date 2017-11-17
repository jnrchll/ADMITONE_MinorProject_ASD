<?php
session_start(); 

$loggedinID = $_SESSION['userID'];

$movieid = $_POST['movieid'];
$time = $_POST['timesel'];
				
include("menu2.php");
include("database.php");

$query = "SELECT * FROM moviesinfo where movieid='$movieid '";
$result = mysqli_query($connection, $query);



?>
<div id="seatinfocontainer">
	<div>
	
	<span><?php 
			while($row = mysqli_fetch_array($result))
			{
				echo "<span>Movie: </span>";
				echo $row['movietitle'];
				echo "</br><span>Cinema: </span>";
				echo $row['cinema'];
			}
	?> </span>
	</div>
	
	<form action="buyticket.php" method="POST">
	<div>
		<span>Select Time: </span>
		<span><?php echo $time; ?> </span>
	</div>
	</form>
	<form action="customerinfo.php" method="POST">
	<input type="hidden" name="movieid" value="<?php echo $movieid; ?>" >
	<input type="hidden" name="time" value="<?php echo $time; ?>" >
	<div id="seatcont">
		<div id="screen"> 
			Screen here
		</div>
		<div>
			<table id="seatinfotbl">
				<?php 
				
									
							
							$query1 = "SELECT seatnum FROM ticketreservation where time='$time' and movieid='$movieid' order by seatnum asc";
							$result1 = mysqli_query($connection, $query1);
								
							
								$count1=1;
								while(($row1 = mysqli_fetch_array($result1)) or ($count1<=100))
								{
									while ($count1<=100)
									{
										if(($count1 == 1) or ($count1 == 11) or ($count1 == 21) or ($count1 == 31) or ($count1 == 41) or ($count1 == 51) or ($count1 == 61) or ($count1 == 71) or ($count1 == 81) or ($count1 == 91) ) 
										{ ?>
										<tr>
										<?php
										}
											if($row1['seatnum'] == $count1) {
												//echo " s:".$row1['seatnum'];
												//echo " c1:".$count11;
												
												?>
													<td><input class="<?php if(($count1 == 3) or ($count1 == 13) or ($count1 == 23) or ($count1 == 33) or ($count1 == 43) or ($count1 == 53) or ($count1 == 63) or ($count1 == 73) or ($count1 == 83) or ($count1 == 93) or ($count1 == 7) or ($count1 == 17) or ($count1 == 27) or ($count1 == 37) or ($count1 == 47) or ($count1 == 57) or ($count1 == 67) or ($count1 == 77) or ($count1 == 87) or ($count1 == 97)) { echo "seattableai"; } ?>" type="submit" name="seatnum" value="reserved" disabled="disabled" ></td>
												<?php
												$count1 = $count1 + 1;
												break;
											}
											if($row1['seatnum'] != $count1) {
												//echo " s:".$row1['seatnum'];
												//echo " c1:".$count11;
												?>
													<td><input class="<?php if(($count1 == 3) or ($count1 == 13) or ($count1 == 23) or ($count1 == 33) or ($count1 == 43) or ($count1 == 53) or ($count1 == 63) or ($count1 == 73) or ($count1 == 83) or ($count1 == 93) or ($count1 == 7) or ($count1 == 17) or ($count1 == 27) or ($count1 == 37) or ($count1 == 47) or ($count1 == 57) or ($count1 == 67) or ($count1 == 77) or ($count1 == 87) or ($count1 == 97)) { echo "seattableai"; } ?>" type="submit" name="seatnum" value="<?php echo $count1; ?>" ></td>
												<?php
												$count1 = $count1 + 1;
											}
										if(($count1 == 11) or ($count1 == 21) or ($count1 == 31) or ($count1 == 41) or ($count1 == 51) or ($count1 == 61) or ($count1 == 71) or ($count1 == 81) or ($count1 == 91)) 
										{ ?>
										</tr>
										<?php										
										}
									}	
									
									
								}
								
							
							
						
				 ?>
			</table>
		</div>
		</div>
		</form>
	
</div>

	
<!-- do not delete -->
		</div>
	</div>
	
	</body>
</html>