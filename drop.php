<?php
include("conn.php");
session_start();

if(!isset($_SESSION['username'])){
    header('Location: LoginStudent.php');
}
$id = $_GET['id'];	 

$sql = "DELETE FROM enrollment WHERE subject_id='$id' and stu_username='".$_SESSION['username']."'";
if ($conn->query($sql) === TRUE) {
    header("Location: ViewEnrolledSubject.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>