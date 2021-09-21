<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
	$lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$reporting_manager = mysqli_real_escape_string($conn, $_POST['reporting_manager']);
	$designation = mysqli_real_escape_string($conn, $_POST['designation']);
	$allocated_project = mysqli_real_escape_string($conn, $_POST['allocated_project']);

$result = mysqli_query($conn, "UPDATE `employee_data` SET `address`='$address',`reporting_manager`='$reporting_manager',`designation`='$designation',`allocated_project`='$allocated_project', WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");
	
}
?>
<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee_data` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$first_name = $res['first_name'];
	$last_name = $res['last_name'];
	$email = $res['email'];
	$reporting_manager = $res['reporting_manager'];
	$address = $res['address'];
	$designation = $res['designation'];
	$allocated_project = $res['allocated_project'];

}
}
?>
<html>
<head>
	<title>View Employee |  Admin Panel | Employee Management System</title>

    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>Office Collaborator</h1>
			<ul id="navli">
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Employee Info</h2>
                    <form id = "registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     
                                     <input class="input--style-1" type="text" name="first_name" value="<?php echo $first_name;?>" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="last_name" value="<?php echo $last_name;?>" readonly>
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
                            <div class="input-grup">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="address" placeholder="address" value="<?php echo $address;?>">
                                   
                                </div>
                            </div>
          
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="reporting_manager" placeholder="Reporting Manager" value="<?php echo $reporting_manager;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="allocated_project" placeholder="Allocated Project" value="<?php echo $allocated_project;?>">
                        </div>


                        <div class="input-group">
                            <input class="input--style-1" type="text" name="designation" placeholder="Designation" value="<?php echo $designation;?>">
                        </div>


                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
