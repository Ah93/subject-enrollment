f<?php
include('conn.php');
 if(isset($_GET['id'])){
		  $id = $_GET['id'];
		  $edit_state = true;
		  $rec = mysqli_query($conn, "select * from complaints where complaint_id = $id");
		  $record = mysqli_fetch_array($rec);
		  $complaint_id = $record['complaint_id'];
		  $student_complaint = $record['student_complaint'];
		  $admin_response = $record['admin_response'];
		  $stu_username = $record['stu_username'];
		  
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

    <title>Reply Complaints Page</title>

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
            <a class="navbar-brand" href="#">Title</a>
        </div>
        <div id="navbar" class="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="manageSubjects.php">Manage Subjects</a></li>
				<li><a href="addNewSubject.php">Add Subjects</a></li>
                <li><a href="viewComplaints.php">Complaints</a></li>
            </ul>
			<div class="pull-right">
            <ul class="nav navbar-nav">
                <li><a href="logout.php">Logout</a></li>
            </ul>
              </div>
        </div>
    </div>
</nav>

<div class="container">
	<div class="row">
		<center><img src="image\logo-reg.jpg" alt="Italian Trulli" style="width:300px;height:150px;"></center> 
        
       
<fieldset>

<!-- Form Name -->
<center><legend>Reply Complaints</legend></center>

<!-- Text input-->
 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="replyComp.php">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Student Complaint</label>  
  <div class="col-md-4">
   <input id="complaintid" name="complaintid" value="<?php echo $complaint_id;?>" class="form-control input-md" required="" type="hidden">
  <textarea id="stucomplaint" name="stucomplaint" class="form-control input-md" required="" type="text" readonly><?php echo $student_complaint;?></textarea>
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Admin Response</label>  
  <div class="col-md-4">
  <textarea id="admResponse" name="admResponse" class="form-control input-md" required="" type="text"></textarea>
  <span class="help-block"> </span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Upload Timetable</label>  
  <div class="col-md-4">
  <input type="file" class="form-control" name="userfile" id="userfile">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Student Username</label>  
  <div class="col-md-4">
  <input id="stu_username" name="stu_username" value="<?php echo $stu_username;?>" class="form-control input-md" required="" type="text" readonly>
  <span class="help-block"> </span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">status</label>  
  <div class="col-md-4">
  <input id="status" name="status" value="1" class="form-control input-md" required="" type="text" readonly>
  <span class="help-block"> </span>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Send</button>
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
    /*  $('#send').click(function(e){
        e.preventDefault();

        var complaintid = $("#complaintid").val();
        var stucomplaint = $("#stucomplaint").val();
		var admResponse = $("#admResponse").val();
		var timetable = $("#timetable").val();
        var stu_username = $("#stu_username").val();
        var status = $("#status").val();

         $.post("replyComp.php", {
	    complaintid: complaintid,
        stucomplaint: stucomplaint,
        admResponse: admResponse,
		timetable: timetable,
		stu_username: stu_username,
		status: status
    }, function (data, status) {
        // close the popup
		console.log(data)
		if(data){
		alert("Response has been sent");
		window.location = "viewComplaints.php";
		}
       
    });
        });*/
    /*$('#myform').on('send', function(e) {
        e.preventDefault();
        var form=document.getElementById('myform');
        var fdata=new FormData(form); 
        $.ajax({
            type: "POST",
            url: 'replyComp.php',
            data: fdata,
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            { 
               // close the popup
		console.log(data)
		if(data){
		alert("Response has been sent");
		window.location = "viewComplaints.php";
		}
            }
        });
    });*/

      });
</script>