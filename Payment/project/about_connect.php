<?php
//$empID = $_POST['Eid'];
//$email = $_POST['email'];
//$department = $_POST['department'];
//$complaint = $_POST['complaint'];

$connection = new mysqli('localhost','root','','group');

if(isset($_POST['Eid']) && isset($_POST['email']) && isset($_POST['department']) && isset($_POST['complaint']))
{
    $empID = $_POST['Eid'];
	$email = $_POST['email'];
	$department = $_POST['department'];
	$complaint = $_POST['complaint'];


    $is_insert = $connection -> query("INSERT INTO `complaint_team`(`Eid`, `email`, `department`, `complaint`) VALUES ('$empID','$email','$department','$complaint')");
    
    if($is_insert == TRUE)
    {
        echo"<h2>Thanks,Your requst submited </h2>";
        exit();
    }
}

?>