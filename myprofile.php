<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee_data` WHERE 1";

$result = mysqli_query($conn, $sql);

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
  $reporting_manager = $res['reporting_manager'];
  $designation = $res['designation'];
  $allocated_project = $res['allocated_project'];

  $pic = $res['pic'];
}
}

?>

<html>
<head>
  <title>My Profile </title>

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
                    <h2 class="title">My Profile</h2>
                    <form method="POST" action="myprofileup.php?id=<?php echo $id?>" >

                        <div class="input-group">
                          <img src="process/<?php echo $pic;?>" height = 150px width = 150px>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p>First Name</p>
                                     <input class="input--style-1" type="text" name="first_name" value="<?php echo $first_name;?>" readonly >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Last Name</p>
                                    <input class="input--style-1" type="text" name="last_name" value="<?php echo $last_name;?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                          <p>Email</p>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
                     
                        
                        <div class="input-group">
                          <p>Contact Number</p>
                            <input class="input--style-1" type="number" name="skill" value="<?php echo $skill;?>" readonly>
                        </div>

                        <div class="input-group">
                          <p>Reporting Manager</p>
                            <input class="input--style-1" type="text" name="reporting_manager" value="<?php echo $reporting_manager;?>" readonly>
                        </div>

                        
                         <div class="input-group">
                          <p>Designation</p>
                            <input class="input--style-1" type="text"  name="designation" value="<?php echo $designation;?>" readonly>
                        </div>

                        <div class="input-group">
                          <p>Allocated Project</p>
                            <input class="input--style-1" type="text" name="allocated_project" value="<?php echo $allocated_project;?>" readonly>
                        </div>

                 <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  name="send" >Update Info</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
