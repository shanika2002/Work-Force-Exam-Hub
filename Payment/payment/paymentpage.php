<!DOCTYPE html>

<html>
	<head>
	
		<title>Work Force Exam Hub</title>
		
		<!--Link CSS-->
		<link rel="stylesheet" href="styles/Decorate.css">
		<style>

				.div1
				{
				  text-align: center;
				  max-width: 400px;
				  margin: 0 auto;
				  padding: 20px;
				  background-color: #fff;
				  border-radius: 10px;
				  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
				}

				.head4
				{
				  background-color:#5DADE2;
				  
				  
				}

				.label1
				{
				  display: block;
				  text-align: left;
				  margin-top: 10px;
				  color: #333;
				}

				input[type="text"],
				select 
				{
				  width: 90%;
				  padding: 10px;
				  border: 1px solid #ccc;
				  border-radius: 5px;
				  background-color: #f8f8f8;
				  color: #333;
				}

				select 
				{
				  width: 90%;
				}

				input[type="text"][id="DD"]
				{
				  width: 40px;
				  padding: 10px;
				  border: 1px solid #ccc;
				  border-radius: 5px;
				  background-color: #f8f8f8;
				  color: #333;
				  margin-right: 5px;
				  text-align: center;
				  box-sizing: border-box;
				}

				.buttonp
				{
				  width: 100%;
				  padding: 10px;
				  background-color: #5DADE2;
				  border: none;
				  border-radius: 5px;
				  cursor: pointer;
				  margin-top: 10px;
				}

				input[type="text"][id="DD"]:
				{
				  outline: none;
				}
				.btninfo
				{
					background-color: #0074D9;
					color: #FDFEFE;
					padding: 10px 20px;
					border: none;
					border-radius: 5px; 
					cursor: pointer;
					text-decoration: none;
				}

				.btninfo:hover 
				{
					background-color: #0056b3;
				}


		</style>
		
		<!--Link js-->
		<script src="js/payment.js"></script>
		
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
			<li class="menue"> <a href="../../index.php" style="background-color:#736DD8;">HOME</a> </li>
			<li class="menue"> <a href="../../Department/department.html">DEPARTMENT</a> </li>
			<li class="menue"> <a href="../../sewmi/payment/paymentpage.php">PAYMENT</a> </li>
			<li class="menue"> <a href="../../sewmi/project/about.php">ABOUT US</a> </li>
			<li class="menue"> <a href="../../Department/index.php">TECHNICAL SUPPORT</a> </li>
			<li class="searchbar"> 
			<form action="/search" method="get">
			<input type="text" id="search" name="q" placeholder="Search">
			<button type="submit">Search</button></form></li>
		</ul><br><br>

<!-------Start the payment form----------->
			<div class="div1">
			<h4 class="head4">Payment Form</h4>
			<form action="payment_connect.php" method="POST" class="wrapper">
					
				<label for ="name" class="label1"> Full Name:</label>
				<input type="text" id="name" name="name" required><br><br>
				
				<label for="department" class="label1">Department: </label>
					<select id="department" name="department">
						<option value="hr">Human Resources(HR)</option>
						<option value="marketing">Marketing</option>
						<option value="finance">Finance</option>
						<option value="sales">Sales</option>
						<option value="it">Information Technology(IT)</option>
						<option value="supply">Supply Chain and Logistics</option>
						<option value="legal">Legal</option>
					</select><br><br>
					
				<label for="amt" class="label1"> Amount(Rs.): </label>
				<input type="number" id="amt" name="amount" required><br><br>
				
				<label for="date" class="label1">Payment Date: </label>
				<input type="date" id="date" name="date" required>
				<br><br>	
					
		
				<button type="submit" class="buttonp" onclick="payment()">PAY NOW</button><br><br>
				<button type="submit" class="btninfo"><a href="readpayment.php">Display Information</a></button>
			</form>
				
			</div>
			<br><br>
		
<!--------End of the Payment form------->
		
		
<!--------footer of the webpage--------->
		<footer>
			<div>
				<button type="button" id="buttn-container" class="button-footer">Privacy policy</button>
				<button type="button" id="buttn-container" class="button-footer">Help</button>
				<button type="button" id="buttn-container" class="button-footer">About Us</button>
			</div>
		</footer>
		
	</body>
</html>