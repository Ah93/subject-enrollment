<!DOCTYPE html>
<!-- saved from url=(0044)https://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login Page</title>

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
<div class="container">
	<div class="row">
		<center><img src="image\logo-reg.jpg" alt="Italian Trulli" style="width:300px;height:150px;"></center> 
        
        <form class="form-horizontal" action="register.php" method="post">
<fieldset>

<!-- Form Name -->
<center><legend>Main Page</legend></center>

<!-- Text input-->


<div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <center><h4>
                    Login Here as Admin
					</h4>
					<hr></center>
                    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">username</label>  
  <div class="col-md-4">
  <input id="ausername" name="ausername" placeholder="Insert your username" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input id="apassword" name="apassword" placeholder="Insert your Password" class="form-control input-md" required="" type="password">
  <span class="help-block"> </span>
  </div>
  
</div>
                
               <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="alogin" name="alogin" class="btn btn-primary lg">Login</button>
  </div>
</div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <center><h4>
                    Login Here as Student
				</h4></center>
				<hr>
                    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" placeholder="Insert your username" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input id="password" name="password" placeholder="Insert your Password" class="form-control input-md" required="" type="password">
  <span class="help-block"> </span>  
  <a href="registerStudent.php">You Don't Have Account?</a>
  </div>
  
</div>
          
                <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="slogin" name="slogin" class="btn btn-primary">Login</button>
  </div>
</div>
            </div>
        </div>
    </div>
</div>
</div>
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
      $('#alogin').click(function(e){
        e.preventDefault();


        var ausername = $("#ausername").val();
        var apassword = $("#apassword").val();

         $.post("loginAdm.php", {
        ausername: ausername,
		apassword: apassword
    }, function (data, status) {
        // close the popup
		var msg = "";
        if(data == 1){
            window.location = "adminHome.php";
        }else{
          msg = "Invalid username and password!";
          }
		  $("#message").html(msg);
		console.log(data)
		
        $("#ausername").val("");
		$("#apassword").val("");
    });
        });

       //student login
	    $('#slogin').click(function(e){
        e.preventDefault();


        var username = $("#username").val();
        var password = $("#password").val();

         $.post("loginStu.php", {
        username: username,
		password: password
    }, function (data, status) {
        // close the popup
		var msg = "";
        if(data == 1){
			//alert(data);
            window.location = "studentHome.php";
        }else{
          msg = "Invalid username and password!";
          }
		  $("#message").html(msg);
		console.log(data)
		
        $("#username").val("");
		$("#password").val("");
    });
        });

      });
</script>