<?php
include("conn.php");
$complaint = $_POST["complaint"];
$stu_user = $_POST["stu_user"];
$status = $_POST["status"];

echo $stuid;

$sql = "insert into complaints(student_complaint, admin_response, stu_username, status) values('$complaint', '-', '$stu_user', '$status')";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>