<?php
$user = 'root';
$pass = '';
$db_name = 'subject_enrollment';

$db = new mysqli('localhost',$user,$pass,$db_name) or die("Connection failed");

if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database

//include 'connect_db.php';
$id = $_GET['id'];
$query = "SELECT name, type, size, timetable from complaints WHERE complaint_id = $id";
$result = mysqli_query($db,$query);
list($name, $type, $size, $timetable) =  mysqli_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $timetable;


}

?>
