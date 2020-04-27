<?php
include("conn.php");
$subid = $_POST["subid"];
$sname = $_POST["sname"];
$stu_user = $_POST["stu_user"];;

echo $stuid;

$sql = "INSERT INTO enrollment (subject_id,subject_name,stu_username)
VALUES ('$subid','$sname','$stu_user');";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>