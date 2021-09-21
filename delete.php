<?php

include("process/dbh.php");


$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM employee_data WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:viewemp.php");
?>

