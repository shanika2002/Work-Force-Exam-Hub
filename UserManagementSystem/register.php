<header class="header-container">
    <link rel="stylesheet" href="./styles/Decorate.css">
		<!--logo and user icon-->
		<img src="./Logo/logo.png" width="300Px" height="200Px" alt="System logo" class="logo">
		<img src="./Logo/User.png" width="200Px" height="150Px" alt="User Icon" class="user" >
		<button type="button" id="myButtonu" class="btn-user" onclick="myFunction()">User</button>
		</form>
	</header>
		
		<hr id="line">
		<!--Horizontal menu-->
		<ul class="menue">
			<li class="menue" id="menu-li-a"> <a href="index.php" id="menu-li-a" style="background-color:#736DD8;">HOME</a> </li>
			<li class="menue" id="menu-li-a"> <a href="#" id="menu-li-a">DEPARTMENT</a> </li>
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">EXAMINATION</a> </li>
			<li class="menue" id="menu-li-a"> <a href="" id="menu-li-a">MY EXAMINATION</a> </li>
			<li class="menue" id="menu-li-a"> <a href="./Department/index.php" id="menu-li-a">TECHNICAL SUPPORT</a> </li>
			<li class="searchbar"> 
			<form action="/search" method="get">
			<input type="text" id="search" name="q" placeholder="Search">
			<button type="submit">Search</button></form></li>
		</ul><br>

<?php
include 'inc/header.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->userRegistration($_POST);
}

if (isset($register)) {
  echo $register;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>User Registration</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Your name</label>
                  <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Your username</label>
                  <input type="text" name="username"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="text" name="mobile"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
                  <input type="hidden" name="roleid" value="3" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-success">Register</button>
                </div>
            </form>
          </div>
        </div>
      </div>
