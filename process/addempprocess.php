<?php

require_once ('dbh.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$eid = $_POST['eid'];
$allocated_project = $_POST['allocated_project'];
$reproting_manager = $_POST['reporting_manager'];
$designation = $_POST['designation'];
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored)){

    $destinationfile = 'images/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);
   $sql = "INSERT INTO `employee_data`(`id`, `first_name`, `last_name`, `email`, `password`, `allocated_project`,  `reporting_manager`, `designation`, `pic`) VALUES ('$eid', '$first_name', '$last_name', '$email', '1234', '$allocated_project',  '$reporting_manager', '$designation','$destinationfile')";

$result = mysqli_query($conn, $sql);

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
}
else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

}
else{
    $sql = "INSERT INTO `employee_data`(`id`, `first_name`, `last_name`, `email`, `password`, `allocated_project`,  `reporting_manager`, `designation`, `pic`) VALUES ('$eid', '$first_name', '$last_name', '$email', '1234', '$allocated_project',  '$reproting_manager', '$designation','images/no.jpg')";
$result = mysqli_query($conn, $sql);
if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewemp.php';
    </SCRIPT>"); 
}
}

?>
