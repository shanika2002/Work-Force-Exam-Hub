<!DOCTYPE html>

<html>
	<head>
	
		<title>Work Force Exam Hub</title>
		<!--Link CSS-->
		<link rel="stylesheet" href="styles/depcss.css">
		<link rel="stylesheet" href="styles/depcss2.css">
		<!--Link js-->
		<script src="js/Javascript.js"></script>
		
	</head>
	
	<body>
	<header class="header-container">
		<!--logo and user icon-->
		<img src="logo/WEBLOGO.png" width="300Px" height="200Px" alt="System logo" class="logo">
		<img src="images/User.png" width="100Px" height="100Px" alt="User Icon" class="user" >
		<button type="button" id="myButtonu" class="btn-user" onclick="myFunction()">User</button>
		</form>
	</header>
		
		<hr id="line">
		<!--Horizontal menu-->
		<ul class="menue">
			<li class="menue" id="menu-li-a"> <a href="../index.html" id="menu-li-a" style="background-color:#736DD8;">HOME</a> </li>
			<li class="menue" id="menu-li-a"> <a href="../Department/" id="menu-li-a">DEPARTMENT</a> </li>
			<li class="menue" id="menu-li-a"> <a href="../sewmi/payment/paymentpage.php" id="menu-li-a">PAYMENT</a> </li>
			<li class="menue" id="menu-li-a"> <a href="../sewmi/project/about.php" id="menu-li-a">ABOUT US</a> </li>
			<li class="menue" id="menu-li-a"> <a href="../Department/create.php" id="menu-li-a">TECHNICAL SUPPORT</a> </li>
			<li class="searchbar"> 
			<form action="/search" method="get">
			<input type="text" id="search" name="q" placeholder="Search">
			<button type="submit">Search</button></form></li>
		</ul><br>


		<div class="container my-5" >
		<link rel="stylesheet" href="styles/Phdecorate.css">
		<center>
			<h1>List of Tickets</h1>
			<hr>
			<br><br>
			<a class="btn btn-primary" href="create.php" role="button">Raise a Ticket</a>
			<br><br>
			<br>
			<table class="tableindex" border="1">
				<thead>
					<tr>
						<th class="inex-container">ID</th>
						<th class="inex-container">Name</th>
						<th class="inex-container">Department</th>
						<th class="inex-container">Message</th>
						<th class="inex-container">Action</th>
					</tr>
				</thead>
				<tbody>
				
					<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$database = "group";
					
						//Create connection
						$connection = new mysqli($servername, $username, $password, $database);
						
						
						//check connection
						if ($connection->connect_error){
							die("Connection faild: ".$connection->connect_error);
							
						}
						
						//read all row from database table
						$sql = "SELECT * FROM ticket";
						$result = $connection->query($sql);
						
						if (!$result){
							
							die ("Invalid query: ". $connection->error);
						}
						
						//read data  of each rawurldecode
						while ($row = $result->fetch_assoc()){
							echo "
									<tr>
										<td class='inex-container'>$row[ID]</td>
										<td class='inex-container'>$row[Name]</td>
										<td class='inex-container'>$row[Dept]</td>
										<td class='inex-container'>$row[Message]</td>
						
										<td class='inex-container'>
											<a class='button-edit' href='edite.php?ID=$row[ID]'>Edit</a>
											<a class='button-datadelete' href='delete.php?ID=$row[ID]'>Delete</a>
							
										</td>
								
									</tr>
							";
							
						}
					
					?>
				</tbody>
			</table>
			
		</center>
		</div>
		
		
		
		
		<br><br><br><br><br><br><br><br><br><br>
		
		
		<!--footer of the webpage-->
		<footer>
			<div>
				<button type="button" id="buttn-container" class="button-footer"><a href="Terms.html" style="color: white;">Terms and conditions</a></button>
				<button type="button" id="buttn-container" class="button-footer">Help</button>
				<button type="button" id="buttn-container" class="button-footer">About Us</button>
			</div>
		</footer>
		
	</body>
</html>

