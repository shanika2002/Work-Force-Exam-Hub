<?php
	include_once'payment_connect.php';
?>

<!DOCTYPE html>
 <html>
 <head>
 
	<style>
		.bodyclr
		{
			background-color:#F5B7B1;
		}
		table
		{
			font-family: arial, sans serif;
			width: 100%;
			border: 2px solid;
		}
		td,th
		{
			text-align: left;
			padding: 7px;
			border: 1px solid;
		}
		.button1
		{
			background-color: #D35400; 
            color: #FBFCFC; 
            border: none;
            padding: 8px 16px;
            cursor: pointer; 
            border-radius: 4px; 
			
		}
		.styled-button
		{
			background-color:#73C6B6; 
            color: #fff; 
            border: none; 
            padding: 8px 16px;
            cursor: pointer; 
            border-radius: 4px; 
		}
		.styled-button:hover 
		{
            background-color:#27AE60; 
		}
		
	</style>	
	
	<link rel="stylesheet" href="styles/Decorate.css">
	
	
	<title>CRUD operations</title>
 </head>
 
 <body class="bodyclr">
 
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
			<li class="menue"> <a href="" style="background-color:#736DD8;">HOME</a> </li>
			<li class="menue"> <a href="">DEPARTMENT</a> </li>
			<li class="menue"> <a href="">EXAMINATION</a> </li>
			<li class="menue"> <a href="">MY EXAMINATION</a> </li>
			<li class="menue"> <a href="">TECHNICAL SUPPORT</a> </li>
			<li class="searchbar"> 
			<form action="/search" method="get">
			<input type="text" id="search" name="q" placeholder="Search">
			<button type="submit">Search</button></form></li>
		</ul><br>
		<!--End of Horizontal menu-->
		
	<div>
		<button class="button1"><a href="paymentpage.php"> ADD </a></button>
		<br><br>
		<table>
		<tr>
		 
			<th>Full Name</th>
			<th>Department</th>
			<th>Amount(Rs.)</th>
			<th>date</th>
			<th>Operation</th>
		</tr>
		
		<?php
			$connection = mysqli_connect('localhost','root','','group');
			
			if(!$connection)
			{
			die("Connection failed: ".mysqli_connect_error());
			}

			$sql = "SELECT * FROM paymentdetails";
			$result = mysqli_query($connection, $sql);

			if (!$result) 
			{
				die("Query failed: " . mysqli_error($connection));
			}
			
				while($row = mysqli_fetch_assoc($result))
				{
				
					$name = $row['name'];
					$department = $row['department'];
					$amount = $row['amount'];
					$date = $row['date'];
					echo "<tr><td>".$name."</td><td>".$department."</td><td>".$amount."</td><td>".$date."</td>
					<td><a href='editpayment.php?id=$row[id]&name=$row[name]&department=$row[department]&amount=$row[amount]&date=$row[date]'>
                    <button class='styled-button'>Update</button></a>
					
					<a class='delete-button' href='deletepayment.php?id=$row[id]'>
                    <button class='styled-button delete-button'>Delete</button></a></td></tr>";
				}
				
				
				mysqli_close($connection);
		?>
		
		</table>
		</div>
		<br><br>
		
		<!--footer of the webpage-->
		<footer>
			<div>
				<button type="button" id="buttn-container" class="button-footer">Privacy policy</button>
				<button type="button" id="buttn-container" class="button-footer">Help</button>
				<button type="button" id="buttn-container" class="button-footer">About Us</button>
			</div>
		</footer>

 
 </body>
 

 </html>
 
 
 

