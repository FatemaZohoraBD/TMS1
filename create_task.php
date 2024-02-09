<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <title></title>

    <!-- jQuery file -->
<script src="includes/jquery_latest.js"></script>

<!-- Bootstrap files -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>


    <!--External CSS file-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
       <!--header code start here-->
       <div class="row" id="header" style="background-color: yellowgreen;">
        <div class="col-md-12">
            <div class="col-md-4" style="display: inline-block;">
                <h2>
                    <p style="text-align: center;">Task Management System</p>
                </h2>
            </div>

            <div class="col-md-6" style="display: inline-block; text-align: right;">

                <p style="text-align: right;">Email:admin@gmail.com</p>
                <span style="margin-left: 1000px;"><b>Name: </b>Admin User</span>
            </div>
        </div>

    </div>
    <!--header code ends here-->
<div class="row" style="display: flex;">
        <div class="col-md-2" id="left_sidebar" style="background-color: white;width: 150px; height: 135px; 
    padding: 25px; border-radius: 20px;">
            <table class="table">
                <tr>
                    <td style="text-align: center;">


                        <a href="admin_dashboard.php" type="button" id="logout_link">Dashboard</a>

                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="create_task.php" type="button" class="link" id="create_task">Create task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="apply_leave.php" type="button" class="link" id="manage.task">Manage task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="view_leave.php" type="button" class="link" id="view_leave">Leave application</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="logout.php" type="button" class="link" id="logout_link">Logout</a>
                    </td>
                </tr>
            </table>
        </div>




<div class="row">
<div style="text-align: center";>
<h3>Create a new task</h3>
<div class="col-md-6" >
	<form action="" method="post">
		<div class="form-group">
			<label>Select user:</label>
             <select class="form-control">
             	<option>-Select-</option>
             </select>
         </div>
     </form>
 </div>
</div>
</div>

</body>
</html>