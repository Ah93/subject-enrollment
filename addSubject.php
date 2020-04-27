<?php
include("conn.php");
$suname = $_POST["suname"];
$sudesc = $_POST["sudesc"];
$tname = $_POST["tname"];
$semester = $_POST["semester"];
//$stuid = "1214121451";

echo $stuid;

$sql = "INSERT INTO subject (subject_name,description,teacher_name,semester)
VALUES ('$suname','$sudesc','$tname','$semester');";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>