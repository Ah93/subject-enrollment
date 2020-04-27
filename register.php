<?php
include("conn.php");
$stuid = $_POST["stuid"];
$fname = $_POST["fname"];
$email = $_POST["email"];
$phoneno = $_POST["phoneno"];
$username = $_POST["username"];
$password = $_POST["password"];

echo $stuid;

$sql = "INSERT INTO student (student_id, full_name, email, phone_no, username, password)
VALUES ('$stuid','$fname','$email','$phoneno','$username','$password');";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>