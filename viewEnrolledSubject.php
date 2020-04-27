<?php
include("conn.php");
session_start();
// Store Session Data
// If the user is not logged in redirect to the login page...
if(!isset($_SESSION['username'])){
    header('Location: LoginStudent.php');
}
 ?>  
<!DOCTYPE html>
<!-- saved from url=(0044)https://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Subject Enrollment Page</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap.min.css" rel="stylesheet">
	<link href="./assets/style.css" rel="stylesheet">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./assets/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/dataTables.responsive.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
  

</style>

  
  </style></head>
   
  <body>
   <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container text-center">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo $_SESSION['username'] ?></a>
        </div>
        <div id="navbar" class="navbar-collapse">
            <ul class="nav navbar-nav">
               <li><a href="studentHome.php">Enroll Subject</a></li>
               <li><a href="viewEnrolledSubject.php">View Enrolled Subject</a></li>
			   <li><a href="makeComplaint.php">Make Complaint</a></li>
			   <li><a href="viewResponsedComplaints.php">View Responsed Complaint</a></li>
            </ul>
			<div class="pull-right">
            <ul class="nav navbar-nav">
                <li><a href="sLogout.php">Logout</a></li>
            </ul>
              </div>
        </div>
    </div>
</nav>
      <div class="container">
	<div class="row">
		<center><img src="image\logo-reg.jpg" alt="Italian Trulli" style="width:250px;height:150px;"></center> 
        
<fieldset>

<!-- Form Name -->
<center><legend>Enrolled Subjects</legend></center>

<!-- Text input-->


<!-- Text input-->
<table id="subjects" class="table table-striped table-bordered" style="width:100%">
	                    <thead>
                        <tr>
                            <th>Enrollment ID</th>
							<th>Subject ID</th>
							<th>Subject Name</th>
							<th>Username</th>
							<th>Action</th>
                        </tr>
						</thead>
						<tbody id="dropid">
						<?php
                    $query = "SELECT * from enrollment where stu_username='".$_SESSION['username']."' ";  
                    $result = $conn->query($query);
           
               if($result->num_rows > 0) {
                // output data of each row
                 while($row = $result->fetch_assoc()) {
                        ?>
                <tr>
                        <td><?php echo $row['enrollment_ID']; ?></td>
						<td><?php echo $row['subject_id']; ?></td>
						<td><?php echo $row['subject_name']; ?></td>
						<td><?php echo $row['stu_username']; ?></td>
						<td><a href="drop.php?id=<?php echo $row['subject_id']; ?>">Drop</a></td>
                    </tr>
					<?php
                    }
                    ?>
                </tbody>  
            </table>
			 <?php
                }
                ?>
	</body>
	</html>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
    <script type="text/javascript" src="js/jquery-ui.js"></script>	
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./assets/bootstrap.min.js.download"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./assets/holder.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/ie10-viewport-bug-workaround.js.download"></script>
<script>

$(document).ready(function() {
    $('#subjects').DataTable();	
});

</script>

  

  
  
</body></html>