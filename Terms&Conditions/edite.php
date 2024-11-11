<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "group";
			
	//create connection_aborted
	$connection= new mysqli($servername,$username,$password,$database);

	$id = "";
	$subject = "";
	$type = "";
	$examiner_ID = "";
	$examiner = "";
	$department = "";
	
	$errorMessage = "";
	$successMessage = "";
	
	if ($_SERVER['REQUEST_METHOD'] == 'GET' ){
		
		//GET method: Show the data of the client
		
		if ( !isset($_GET["ID"])){
			
			header("location: index.php");
			exit;
		}
		
		$id = $_GET["ID"];
		
		//read the row of the selected client from database table
		$sql = "SELECT * FROM exams WHERE ID = $id";
		$result = $connection->query($sql);
		$row = $result->fetch_assoc();
		
		if (!$row){
			header("location: index.php");
			exit;
		}
		
		$subject= $row["Subject"];
		$type= $row["Type"];
		$examiner_ID= $row["Examiner_ID"];
		$examiner= $row["Examiner"];
		$department= $row["Department"];
		
	}
	else{
		//POST method: Update the data of the client
		$id = $_POST["ID"];
		$subject= $_POST["field1"];
		$type= $_POST["field2"];
		$examiner_ID= $_POST["field3"];
		$examiner= $_POST["field4"];
		$department= $_POST["field5"];
		
		do{
			if ( empty($id) || empty($subject) || empty($subject) || empty($type) || empty($examiner_ID) || empty($examiner) || empty($department)){
				
				$errorMessage = "Akk the fields are required";
				break;
			}
			
			$sql = "UPDATE exams ".
					"SET Subject = '$subject', Type = '$type', Examiner_ID = '$examiner_ID', Examiner = '$examiner', Department = '$department' ".
						"WHERE ID=$id";
						
			$result = $connection->query($sql);
			
			if ( !$result){
				
				$errorMessage = "Invalid query: ". $connection->error;
				break;
			}
			
			$successMessage = "Client Update Correctly";
			
			header("location: index.php");
			exit;
			
		}while(false);
		
	}

?>


<!DOCTYPE html>

<html>
	<head>
	
		<title>Work Force Exam Hub</title>
		<!--Link CSS-->
		<link rel="stylesheet" href="styles/Decorate.css">
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
			<li class="menue" id="menu-li-a"> <a href="Homepage.html" id="menu-li-a" style="background-color:#736DD8;">HOME</a> </li>
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">DEPARTMENT</a> </li>
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">EXAMINATION</a> </li>
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">MY EXAMINATION</a> </li>
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">TECHNICAL SUPPORT</a> </li>
			<li class="searchbar"> 
			<form action="/search" method="get">
			<input type="text" id="search" name="q" placeholder="Search">
			<button type="submit">Search</button></form></li>
		</ul><br>

		<center>
		<div>
		<link rel="stylesheet" href="styles/Phdecorate.css">
		<div class="content-box-create">
		
			<h1 id="new-exam-header">Edit Exam</h1>
				
				<form method="POST" class="main-form-container">
					<input type="hidden" name="ID" value="<?php echo $id; ?>">
					
					Subject		 
					<input type="text" class="form-inputs" name="field1" value="<?php echo $subject; ?>"><br/><br/><br/>
	
					Type		 
					<input type="text"  class="form-inputs" name="field2" value="<?php echo $type; ?>"><br/><br/><br/>
					
					Examiner ID	 
					<input type="text"  class="form-inputs" name="field3" value="<?php echo $examiner_ID; ?>"><br/><br/><br/>
					
					Examiner Name
					<input type="text"   class="form-inputs" name="field4" value="<?php echo $examiner; ?>"><br/><br/><br/>
					
					Department	 
					<input type="text"  class="form-inputs" name="field5" value="<?php echo $department; ?>"><br/><br/><br/>
					
					<?php
					if ( !empty($successMessage)){
						
						echo"<div class='SuccessMessage' role='alert'>
						<strong>$successMessage</strong>
						</div>
						";
					}
				
					?>
	
					<div class="submit-delete">
						<input type="submit" id="submitBtn" value="Submit"><br><br><br>
						<a class="delete-container" href="index.php" role="button">cancel</a>
					</div>
					
				</form>
			</div>
			</div>
		</center>
		
		
		
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
