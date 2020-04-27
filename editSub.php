<?php
include("conn.php");
$esuid = $_POST["esuid"];
$esname = $_POST["esname"];
$edesc = $_POST["edesc"];
$etechName = $_POST["etechName"];
$esem = $_POST["esem"];

$stuid = "1214121451";

echo $stuid;

$sql = "UPDATE subject SET subject_name='$esname', description='$edesc', teacher_name='$etechName', semester='$esem'  WHERE subject_id='$esuid'";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>