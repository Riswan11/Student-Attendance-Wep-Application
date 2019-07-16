<?php
include("config.php");
$user_id=$_POST['user_id'];
$the_time=$_POST['the_time'];
$sql="UPDATE tbl_student_enrollment SET Time_Out ='$the_time' WHERE id='$user_id'";
$run=mysqli_query($con, $sql);
if($run){
    session_start();
    session_destroy();
    echo "1";
}


