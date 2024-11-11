<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "group";
			
	//create connection_aborted
	$connection= new mysqli($servername,$username,$password,$database);


	$subject = "";
	$type = "";
	$examiner_ID = "";
	$examiner = "";
	$department = "";
	
	$errorMessage = "";
	$successMessage = "Client add correctly";
	
	//check wheather there is any empty value
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$subject= $_POST["field1"];
		$type= $_POST["field2"];
		$examiner_ID= $_POST["field3"];
		$examiner= $_POST["field4"];
		$department= $_POST["field5"];
	}
	
	do{
		if ( empty($subject) || empty($type)|| empty($examiner_ID)|| empty($examiner)|| empty($department)){
				
				$errorMessage = "All the fields are required";
				break;
		}
		
		//add new client to database
		$sql = "INSERT INTO exams (Subject, Type, Examiner_ID, Examiner, Department)".
				"VALUES ('$subject','$type','$examiner_ID','$examiner','$department')";
		$result = $connection->query($sql);
		
		if (!$result){
			$errorMessage="Invalid query".$connection->error;
			break;
		}
		
		
		$subject = "";
		$type = "";
		$examiner_ID = "";
		$examiner = "";
		$department = "";
		
		$successMessage = "Client added correctly";
		
		header("location: index.php");
		exit;
		
		
	}while(false);

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
			<li class="menue" id="menu-li-a"> <a href="../index.php" id="menu-li-a" style="background-color:#736DD8;">HOME</a> </li>
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
		<div class="content-box-create">
		<link rel="stylesheet" href="styles/Phdecorate.css">
			

		
			<h1 id="new-exam-header">New Exam</h1>
				
				<form method="POST" class="main-form-container" >
					
					Subject		 
					<input type="text" class="form-inputs" name="field1" value="<?php echo $subject; ?>"><br/><br/><br/>
	
					Type		 
					<input type="text" class="form-inputs" name="field2" value="<?php echo $type; ?>"><br/><br/><br/>
					
					Examiner ID	 
					<input type="text" class="form-inputs" name="field3" value="<?php echo $examiner_ID; ?>"><br/><br/><br/>
					
					Examiner Name
					<input type="text" class="form-inputs" name="field4" value="<?php echo $examiner; ?>"><br/><br/><br/>
					
					Department	 
					<input type="text"  class="form-inputs" name="field5" value="<?php echo $department; ?>"><br/><br/><br/>
	
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
