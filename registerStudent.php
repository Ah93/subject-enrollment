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
<div class="container">
	<div class="row">
		<center><img src="image\logo-reg.jpg" alt="Italian Trulli" style="width:300px;height:150px;"></center> 
        
        <form class="form-horizontal" action="register.php" method="post">
<fieldset>

<!-- Form Name -->
<center><legend>Register Here</legend></center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Student ID</label>  
  <div class="col-md-4">
  <input id="stuid" name="stuid" placeholder="Insert your Student ID" max="10" min="10" class="form-control input-md" required="" type="number">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Full Name</label>  
  <div class="col-md-4">
  <input id="fname" name="fname" placeholder="Insert your Full Name" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" placeholder="Insert your email" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone Number</label>  
  <div class="col-md-4">
  <input id="phoneno" name="phoneno" placeholder="Insert your Phone Number" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">username</label>  
  <div class="col-md-4">
  <input id="username" name="username" placeholder="Insert your Username" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input id="password" name="password" placeholder="Insert your Password" class="form-control input-md" required="" type="password">
  <span class="help-block"> </span>
<a href="mainPage.php">You Already Have Account?</a><br>  
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="submitReg" name="submitReg" class="btn btn-primary">Submit</button>
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
      $('#submitReg').click(function(e){
        e.preventDefault();


        var stuid = $("#stuid").val();
        var fname = $("#fname").val();
		var email = $("#email).val();
		var phoneno = $("#phoneno").val();
        var username = $("#username").val();
        var password = $("#password").val();

         $.post("register.php", {
        stuid: stuid,
        fname: fname,
		email: email,
		phoneno: phoneno,
		username: username,
		password: password
    }, function (data, status) {
        // close the popup
		console.log(data)
		if(data){
		alert("You Have Registered Successfully");
		window.location = "LoginStudent.php";
		}
       
        $("#stuid").val("");
		$("#fname").val("");
		$("#email").val("");
		$("#phoneno").val("");
        $("#username").val("");
		$("#password").val("");
    });
        });


      });
</script>