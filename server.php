<?php
session_start();
include_once("config.php");
$student_id=$_POST['student_id'];
$class_no=$_POST['course_no'];

if(isset($_POST['submit'])){
    $sql="SELECT * FROM tbl_student_information WHERE Student_id='$student_id' and Class_No='$class_no'";
    $run=mysqli_query($con, $sql) or die(mysqli_error($con));
    $row=mysqli_fetch_assoc($run);
    if($row){
            $_SESSION['Student_id']=$row['Student_id'];
            header("location:dashboard.php");
        }
    else{
            echo "<script>alert('incorrect details');</script>";
            header("location:index.php");
        }
}

?>