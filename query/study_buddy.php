<?php

include '../db/connect_db.php';

$username = $_POST['username'];
$course_name = $_POST['course_name'];
$course_id = $_POST['course_id'];
$library = $_POST['library'];

$sql = "INSERT INTO users(username, course_name, course_id, lib_name)
VALUES('$username', '$course_name', '$course_id', $library')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);

?>