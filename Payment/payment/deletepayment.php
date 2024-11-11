<?php
include_once 'payment_connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) 
{
    $id = $_GET['id'];

    $query = "DELETE FROM paymentdetails WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) 
	{
        echo "<script>alert('Records Deleted successfully!!');window.location.href='readpayment.php';</script>";
    } 
	else 
	{
        echo "Error!! " . mysqli_error($connection);
    }
} 
else 
{
    echo "Invalid ID for deletion.";
}
?>
