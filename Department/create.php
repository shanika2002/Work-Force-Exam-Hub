<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "group";
			
	//create connection_aborted
	$connection= new mysqli($servername,$username,$password,$database);


	$id = "";
	$name = "";
	$message = "";
	$department = "";
	
	$errorMessage = "";
	$successMessage = "Client add correctly";
	
	//check wheather there is any empty value
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$id= $_POST["id"];
		$name= $_POST["name"];
		$message= $_POST["message"];
		$department= $_POST["department"];
	}
	
	do{
		if ( empty($id) || empty($name)|| empty($message)|| empty($department)){
				
				$errorMessage = "All the fields are required";
				break;
		}
		
		//add new client to database
		$sql = "INSERT INTO ticket (ID, Name, Dept, Message)".
				"VALUES ('$id','$name','$message','$department')";
		$result = $connection->query($sql);
		
		if (!$result){
			$errorMessage="Invalid query".$connection->error;
			break;
		}
		
		
		$id = "";
		$name = "";
		$message = "";
		$department = "";
		
		$successMessage = "Client added correctly";
		
		header("location: index.php");
		exit;
		
		
	}while(false);

?>


<!DOCTYPE html>

<html>
	<head>
	
		<title>Ticket Center</title>
		<!--Link CSS-->
		<link rel="stylesheet" href="styles/depcss.css">
		<link rel="stylesheet" href="styles/depcss2.css">
		<!--Link js-->
		<script src="js/phpfile.js"></script>
		
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
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">DEPARTMENT</a> </li>
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">EXAMINATION</a> </li>
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">MY EXAMINATION</a> </li>
			<li class="menue" id="menu-li-a"> <a href="../Department/create.php" id="menu-li-a">TECHNICAL SUPPORT</a> </li>
			<li class="searchbar"> 
			<form action="/search" method="get">
			<input type="text" id="search" name="q" placeholder="Search">
			<button type="submit">Search</button></form></li>
		</ul><br>

		<center>
		<div class="content-box-create">

			<h1 id="new-exam-header">Raise a Ticket</h1>
				
				<form method="POST" class="main-form-container" >
					
					Employee ID	 
					<input type="text" class="form-inputs" name="id" value="<?php echo $id; ?>"><br/><br/><br/>
					
					Employee Name
					<input type="text" class="form-inputs" name="name" value="<?php echo $name; ?>"><br/><br/><br/>
					
					Department	 
					<input type="text"  class="form-inputs" name="department" value="<?php echo $department; ?>"><br/><br/><br/>

					Message	 
					<textarea type="text"  class="form-inputs" name="message" rows="10" value="<?php echo $message; ?>"></textarea><br/><br/><br/>
	
					<div class="submit-delete">
						<input type="submit" id="submitBtn" value="Submit"><br><br><br>
						<a class="delete-container" href="index.php" role="button">cancel</a>

					
				</form>
			</div>
		</center>
		
		
		
		<br><br><br><br><br><br><br><br><br>
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
