<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee_data` WHERE 1";


$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  
  $akill = mysqli_real_escape_string($conn, $_POST['skill']);
  
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
 


 $result = mysqli_query($conn, "UPDATE `employee_data` SET `skill`='$skill',`address`='$address',`phone_numbe`='$phone_number' WHERE id=$id");

 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='myprofile.php?id=$id  ';
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
  $phone_number = $res['phone_number'];
  $address = $res['address'];
  $skill = $res['skill'];
 
}
}

?>

<html>
<head>
  <title>Update Profile </title>
 
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
  <header>
    <nav>
      <h1>Office Collaborator</h1>
      <ul id="navli">
        
        <li><a class="homered" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
        
        <li><a class="homeblack" href="index.html">Log Out</a></li>
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
                    <form id = "registration" action="myprofileup.php" method="POST">

                        <div class="input-group">
                          <p>Skill</p>
                            <input class="input--style-1" type="email"  name="skill" value="<?php echo $skill;?>">
                        </div>
                       
                        
                        <div class="input-group">
                          <p>Phone Number</p>
                            <input class="input--style-1" type="number" name="phone_number" value="<?php echo $phone_number;?>">
                        </div>
                        
                         <div class="input-group">
                          <p>Address</p>
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>
                      
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    <br>
                    <button class="btn btn--radius btn--green" onclick="window.location.href = 'changepassemp.php?id=<?php echo $id?>';">Change Password</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
