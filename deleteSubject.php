<?php
include("conn.php");
$id = $_GET['id'];	 

$sql = "DELETE FROM subject WHERE subject_id='$id'";
if ($conn->query($sql) === TRUE) {
    header("Location: manageSubjects.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>