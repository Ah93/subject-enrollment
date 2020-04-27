<?php
include("conn.php");
$aname = $_POST["aname"];
$ausername = $_POST["ausername"];
$apassword = $_POST["apassword"];

echo $stuid;

$sql = "INSERT INTO admin (admin_name,username,password)
VALUES ('$aname','$ausername','$apassword');";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>