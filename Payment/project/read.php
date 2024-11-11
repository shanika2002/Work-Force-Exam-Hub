<?php
	include_once'about_connect.php';
?>

<!DOCTYPE html>
 <html>
 <head>
 
	<style>
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
			background-color: #007BFF; 
            color: #FDFEFE; 
            border: none; 
            padding: 8px 16px;
            cursor: pointer; 
            border-radius: 4px; 
			
		}
		.styled-button
		{
			background-color: #007BFF; 
            color: #fff; 
            border: none; 
            padding: 8px 16px;
            cursor: pointer; 
            border-radius: 4px; 
		}
		.styled-button:hover 
		{
            background-color: #0056b3; 
		}
		
	</style>	
	
	<link rel="stylesheet" href="styles/Decorate.css">
	
	<script>
        function confirmDelete(deleteUrl) 
		{
            if (confirm("Are you sure you want to delete this record?")) 
			{
                window.location.href = deleteUrl; // Redirect to the delete URL if confirmed
            }
        }
    </script>
	
	
	<title>CRUD operations</title>
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
		<button class="button1"><a href="about.php"> ADD </a></button>
		<br><br>
		<table>
		<tr>
		 
			<th>Employee ID</th>
			<th>Email</th>
			<th>Department</th>
			<th>Complaint</th>
			<th>Operation</th>
		</tr>
		
		<?php
			$connection = mysqli_connect('localhost','root','','group');
			
			if(!$connection)
			{
			die("Connection failed: ".mysqli_connect_error());
			}

			$sql = "SELECT * FROM complaint_team";
			$result = mysqli_query($connection, $sql);

			if (!$result) 
			{
				die("Query failed: " . mysqli_error($connection));
			}
			
				while($row = mysqli_fetch_assoc($result))
				{
				
					$Eid = $row['Eid'];
					$email = $row['email'];
					$department = $row['department'];
					$complaint = $row['complaint'];
					echo "<tr><td>".$Eid."</td><td>".$email."</td><td>".$department."</td><td>".$complaint."</td>
					<td><a href='edit.php?id=$row[id]&Eid=$row[Eid]&email=$row[email]&department=$row[department]&complaint=$row[complaint]'>
                    <button class='styled-button'>Update</button></a>
					
					<a class='delete-button' href='delete1.php?id=$row[id]'>
                    <button class='styled-button delete-button' onclick='confirmDelete(deleteUrl)'>Delete</button>

                </a></td></tr>";
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
 
 
 

