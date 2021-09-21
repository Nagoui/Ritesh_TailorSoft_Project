<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee_data`";

$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee  </title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>Office Collaborator</h1>
			<ul id="navli">
				
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Emp. ID</th>  
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Contact</th>
				<th align = "center">Address</th>
				<th align = "center">Allocated Project</th>
				<th align = "center">Skill</th>
				<th align = "center">Reporting Manager</th>
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee_data = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee_data['id']."</td>";
					echo "<td><img src='process/".$employee_data['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee_data['first_name']." ".$employee_data['last_name']."</td>";
					echo "<td>".$employee_data['email']."</td>";
					echo "<td>".$employee_data['phone_number']."</td>";
					echo "<td>".$employee_data['address']."</td>";
					echo "<td>".$employee_data['allocated_project']."</td>";
					echo "<td>".$employee_data['skill']."</td>";
					echo "<td>".$employee_data['reporting_manager']."</td>";
					echo "<td><a href=\"edit.php?id=$employee_data[id]\">Edit</a> | <a href=\"delete.php?id=$employee_data[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				}
			?>
		</table>

</body>
</html>