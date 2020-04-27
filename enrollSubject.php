<?php
include('conn.php');
session_start();
if(!isset($_SESSION['username'])){
    header('Location: LoginStudent.php');
}
 if(isset($_GET['id'])){
		  $id = $_GET['id'];
		  $edit_state = true;
		  $rec = mysqli_query($conn, "select * from subject where subject_id = '$id'");
		  $record = mysqli_fetch_array($rec);
		  //$student_id = $record['student_id'];
		  $subject_id = $record['subject_id'];
		  $subject_name = $record['subject_name'];
		  $description = $record['description'];
		  $teacher_name = $record['teacher_name'];
		  $semester = $record['semester'];
		  //$stu_username = $record['stu_username'];
		  
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
		<center><img src="image\logo-reg.jpg" alt="Italian Trulli" style="width:300px;height:150px;"></center> 
        
        <form class="form-horizontal" action="register.php" method="post">
<fieldset>

<!-- Form Name -->
<center><legend>Enroll Subject</legend></center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Subject ID</label>  
  <div class="col-md-4">
  <input id="subid" name="subid" value="<?php echo $subject_id;?>" class="form-control input-md" required="" type="number" disabled>
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Subject Name</label>  
  <div class="col-md-4">
  <input id="sname" name="sname" value="<?php echo $subject_name;?>" class="form-control input-md" required="" type="text" disabled>
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Description</label>  
  <div class="col-md-4">
  <input id="desc" name="desc" value="<?php echo $description;?>" class="form-control input-md" required="" type="text" disabled>
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Teacher Name</label>  
  <div class="col-md-4">
  <input id="techName" name="techName" value="<?php echo $teacher_name;?>" class="form-control input-md" required="" type="text" disabled>
  <span class="help-block"> </span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Semester</label>  
  <div class="col-md-4">
  <input id="sem" name="sem" value="<?php echo $semester;?>" class="form-control input-md" required="" type="text" disabled>
  <span class="help-block"> </span>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <input id="stu_user" name="stu_user" value="<?php echo $_SESSION['username'];?>" class="form-control input-md" required="" type="text" disabled>
  <span class="help-block"> </span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="enroll" name="enroll" class="btn btn-primary">Enroll</button>
  </div>
</div>

</fieldset>
</form>
  
	</div>
</div>
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
      $('#enroll').click(function(e){
        e.preventDefault();

        var subid = $("#subid").val();
        var sname = $("#sname").val();
        var techName = $("#techName").val();
        var stu_user = $("#stu_user").val();

         $.post("enroll.php", {
        subid: subid,
        sname: sname,
		techName: techName,
		stu_user: stu_user
    }, function (data, status) {
        // close the popup
		console.log(data)
		if(data){
		alert("You Have Enrolled The Subject Successfully");
		window.location = "studentHome.php";
		}
       
    });
        });


      });
</script>