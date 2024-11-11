<?php
include_once 'about_connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) 
{
    $id = $_GET['id'];

    // Perform the deletion
    $query = "DELETE FROM complaint_team WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) 
	{
        echo "<script>alert('Records Deleted successfully!!');window.location.href='read.php';</script>";
		//delete the record and redirect to edit page
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
