<?php
include("conn.php");
if (isset($_POST["send"]))
 {
$complaintid = $_POST["complaintid"];
$stucomplaint = $_POST["stucomplaint"];
$admResponse = $_POST["admResponse"];
//$timetable = $_POST["timetable"];
$stu_username = $_POST["stu_username"];
$status = $_POST["status"];

$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}


$sql = "UPDATE complaints SET student_complaint='$stucomplaint', admin_response='$admResponse', name='$fileName', type='$fileType', size='$fileSize', timetable='$content', stu_username='$stu_username', status='$status'  WHERE complaint_id='$complaintid'";
if ($conn->query($sql) === TRUE) {
    header("Location: viewComplaints.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
?>