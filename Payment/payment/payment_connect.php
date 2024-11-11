<?php

$connection = new mysqli('localhost','root','','group');

if(isset($_POST['name']) && isset($_POST['department']) && isset($_POST['amount']) && isset($_POST['date']))
{
    $name = $_POST['name'];
	$department = $_POST['department'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];


    $is_insert = $connection -> query("INSERT INTO `paymentdetails`(`name`, `department`, `amount`, `date`) VALUES ('$name','$department','$amount','$date')");
    
    if($is_insert == TRUE)
    {
		header("Location:paymentpage.php");
        exit();
    }
}

?>