<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css" />
		
        <title>CinemaReservation</title>
</head>
<body>
	<div id="MainContainer">
            
          <div id="MainContainer">
			<?php 
			include("menu1.php");
			?>
            
             <div id="display">
			 
			 
	
				<div class="fling-minislide">
							<img src="img/thor.jpg" alt="Slide4"/>
							<img src="img/badgenius.jpg" alt="Slide3"/>
							<img src="img/geostorm.jpg" alt="Slide2"/>
							<img src="img/theforeigner.jpg" alt="Slide1"/>
						</div>
			<div class="register">
				<form action="index.php" method="POST">
				<input type="hidden" name="task" value="user_validate">
				<table>
					<tr>
						<td><div id="frm">Username: </td>
						<td><input id="type" type="text" name="emailadd" value="" /></br></td>
					</tr>
					<tr>
						<td><div id="frm">Password: </td>
						<td><input id="type" type="password" name="password1" value="" /></br></td>
					</tr>
					<tr>
					<td><input id="type" type="submit" name="submitlogin" value="LOG IN" /></td>
					</tr>
				</ul>
				</form>
			</div>
			</div>
		</div>
			
		</div>
		

</html>