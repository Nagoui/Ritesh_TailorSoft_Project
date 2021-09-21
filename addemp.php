<!DOCTYPE html>
<html>

<head>
   

    <title>Add Employee</title>


    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <nav>
            <h1>Office Collaborator</h1>
            <ul id="navli">
                
                <li><a class="homered" href="addemp.php">Add Employee</a></li>
                <li><a class="homeblack" href="viewemp.php">View Employee</a></li>
              
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="first_name" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="last_name" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
                        </div>
            
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="EID" name="eid" >
                        </div>

                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Designation" name="designation" >
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Reporting Manager" name="reporting_manager" >
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Allocated Project" name="allocated_project" >
                        </div>

            
                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

