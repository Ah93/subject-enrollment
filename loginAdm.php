<?php
//session_start(); // Starting Session
include("conn.php");

$username = mysqli_real_escape_string($conn,$_POST['ausername']);
$password = mysqli_real_escape_string($conn,$_POST['apassword']);

if ($username != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from admin where username='".$username."' and password='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
		$_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = $username;
        echo 1;
    }else{
        echo 0;
    }
}
?>