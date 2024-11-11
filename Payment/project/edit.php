<?php
include_once 'connection.php';

// Check if ID is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) 
{
    $id = $_GET['id'];

    // Check if the form is submitted
    if (isset($_POST['submit'])) 
	{
        $Eid = $_POST['Eid'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $complaint = $_POST['complaint'];

        // Update the record in the database
        $updateQuery = "UPDATE complaint_team SET Eid='$Eid', department='$department', email='$email', complaint='$complaint' WHERE id = $id";

        $result = mysqli_query($connection, $updateQuery);

        if ($result) 
		{          
            header("Location: read.php");
            exit;
        } 
		else 
		{
            echo "Error: " . mysqli_error($connection);
        }
    }

    // Fetch the existing record from the database
    $fetchQuery = "SELECT * FROM complaint_team WHERE id = $id";
    $data = mysqli_query($connection, $fetchQuery);
    $result = mysqli_fetch_assoc($data);
} 
else 
{
    echo "Invalid ID for updating.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.card-header {
		  background-color: #007BFF;
		  color: #fff;
		  padding: 10px;
		  text-align: center;
		}

		.card-body {
		  padding: 20px;
		}

		form {
		  max-width: 400px;
		  margin: 0 auto;
		}

		label {
		  display: block;
		  margin-bottom: 5px;
		  font-weight: bold;
		}

		input[type="text"] {
		  width: 100%;
		  padding: 10px;
		  margin-bottom: 15px;
		  border: 1px solid #ccc;
		  border-radius: 5px;
		}

		input[type="submit"] {
		  background-color: #007BFF;
		  color: #fff;
		  padding: 10px 20px;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		  font-weight: bold;
		}

		input[type="submit"]:hover {
		  background-color: #0056b3;
		}

	</style>
	<link rel="stylesheet" href="styles/Decorate.css">
	
	<script>
    function updateMessage() 
	{
        alert('Form updated successfully!');
    }
	</script>
	
    <title>Update Complaint</title>
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
		
		
    <div class="card-header">
      <h2>Update Complaint!</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="">
            <label for="Eid">Eid:</label>
            <input type="text" name="Eid" value="<?php echo $result['Eid']; ?>" required><br>
			
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $result['email']; ?>"><br>
			
            <label for="department">Department:</label>
				<select name="department">
					<option value="hr" <?php if ($result['department'] == 'hr') echo 'selected'; ?>>Human Resources(HR)</option>
					<option value="marketing" <?php if ($result['department'] == 'marketing') echo 'selected'; ?>>Marketing</option>
					<option value="finance" <?php if ($result['department'] == 'finance') echo 'selected'; ?>>Finance</option>
					<option value="sales" <?php if ($result['department'] == 'sales') echo 'selected'; ?>>Sales</option>
					<option value="it" <?php if ($result['department'] == 'it') echo 'selected'; ?>>Information Technology(IT)</option>
					<option value="supply" <?php if ($result['department'] == 'supply') echo 'selected'; ?>>Supply Chain and Logistics</option>
					<option value="legal" <?php if ($result['department'] == 'legal') echo 'selected'; ?>>Legal</option>
				</select><br><br>
			
            <label for="complaint">Complaint:</label>
            <input type="text" name="complaint" value="<?php echo $result['complaint']; ?>" required><br>


            <input type="submit" name="submit" value="Update" onclick="updateMessage()">
        </form>
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
