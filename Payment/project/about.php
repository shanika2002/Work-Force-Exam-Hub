<!DOCTYPE html>
 <html>
 <head>
	<title>Work Force Exam Hub</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/Decorate.css">
	
	<script src="js/about.js"> </script>
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
			<li class="menue"> <a href="../payment/paymentpage.php">PAYMENT</a> </li>
			<li class="menue"> <a href="../../sewmi/project/about.php">ABOUT US</a> </li>
			<li class="menue"> <a href="../../Department/index.php">TECHNICAL SUPPORT</a> </li>
			<li class="searchbar"> 
			<form action="/search" method="get">
			<input type="text" id="search" name="q" placeholder="Search">
			<button type="submit">Search</button></form></li>
		</ul><br>
		<!--End of Horizontal menu-->
		
	<div>
	<section class="sect1">
		<hr class="line1">
        <h1 class="header1">About Us</h1>
		<p class="para0"> Our mission is an Efficient Examination System for Employees...</p>
		<hr class="line1">
	</div>
        
		<div class="paraback">
            <p class="para2">
                Welcome to our Examination System for Employees website. At its core, our system is designed to empower organizations with a robust, efficient, and customizable tool to evaluate and enhance the knowledge, skills, and performance of their workforce.<br><br>
				Our platform provides a comprehensive solution for conducting examinations, assessments, and evaluations tailored to your company's specific needs. We understand that continuous learning and professional development are essential components of a successful 
				and competitive organization. Hence, our Examination System for Employees is a valuable resource that facilitates growth, skill enhancement, and compliance management.<br><br>
				Our system offers a user-friendly interface, making it easy for both administrators and employees to navigate. It streamlines the examination process, from test creation and delivery to grading and reporting, ensuring efficiency and accuracy at every step.<br>
            </p>
			
        </div>
    </section>
	<hr class="line1">
	<section class="sect2">
	<div class ="work">
		<h2 class="header2">OUR WORK</h2>
		<img src="images/work.jpeg" alt="work" class="image1">
        <p>Our work is a testament to our unwavering dedication to excellence and our relentless pursuit of innovation. 
			With a deep commitment to delivering exceptional results, we take pride in every project we undertake. Our team's 
			collective expertise, creativity, and attention to detail ensure that we consistently exceed expectations.
			From concept to completion, we approach each endeavor with a passion for excellence, striving to push the boundaries 
			of what is possible. Whether it's creating cutting-edge technology, crafting inspiring designs, 
			or providing top-notch services.</p> <br><a href="projects.html">Our Projects</a> 
    </div>
	<div class="team">
		<h2 class="header2">OUR TEAM</h2>
		<img src="images/team1.jpg" alt="team" class="image1">
		<p>Welcome to our website! Our team is comprised of a diverse group of dedicated individuals who share a 
			common passion and vision.<br> We are united by our commitment to excellence and our relentless pursuit 
			of innovation. Each member brings a unique set of skills and expertise to the table, creating a dynamic 
			and collaborative environment where creativity thrives.<br><br> <a href="team.html">Meet our Team...</a></p> 
	</div>
		<div class="touch">
		<h2 class="header2">GET IN TOUCH</h2>
		<img src="images/touch1.jpg" alt="team" class="image1">
		<p>Feel free to reach out through our email, or phone,or WhatsApp and one of our dedicated team members 
		   will be delighted to assist you.
		   <ul>
		   <li>Email: workforce@gmail.com </li>
		   <li>Contact: +94 77-xxxxxxx</li>
		   <li>WhatsApp: +94 77-xxxxxxx</li>
		   </ul>
		   </p>
	</div>
	</section>
	
	<section>
	<img src="images/exam3.jpg" alt="exam" class="image3">
	</section>
	
	<br>
	<section>
		<h3 class="header3"><center>Any Complaints on exams?</center></h3>
	</section>
	
	<br>
	<section>
		<div class="box1">
			<h4 class="head4">Complaint Box</h4>
			<form action="about_connect.php" id="cmpForm" method="POST">
				
				<label for="Eid">Employee ID: </label>
				<input type="text" id="Eid" name="Eid" required><br><br>
				
				<label for="email">email: </label>
				<input type="text" id="email" name="email"><br><br>
				
				<label for="department">Department: </label>
				<select id="department" name="department">
					<option value="hr">Human Resources(HR)</option>
					<option value="marketing">Marketing</option>
					<option value="finance">Finance</option>
					<option value="sales">Sales</option>
					<option value="it">Information Technology(IT)</option>
					<option value="supply">Supply Chain and Logistics</option>
					<option value="legal">Legal</option>
				</select><br><br>
				
				<label for="complaint">Complaint: </label>
				<textarea id="complaint" name="complaint" rows="5" required></textarea><br><br>
				
				<button type="submit" onclick="compform()">SUBMIT</button>
				<button type="submit" class="buttonabt"><a href="read.php">Display Information</a></button>
			</form>	
			
		</div>
	</section>
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
	