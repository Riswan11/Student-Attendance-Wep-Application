<?php
session_start();
include_once("config.php");
$username=$_POST['username'];
$password=$_POST['password'];

if(isset($_POST['submit'])){
    $sql="SELECT * FROM tbl_admin WHERE admin_username='$username' and admin_password='$password'";
    $run=mysqli_query($con, $sql) or die(mysqli_error($con));
    $row=mysqli_fetch_assoc($run);
    if($row){
        $_SESSION['admin_username']=$row['admin_username'];
        header("location:admin_dashboard.php");
    }
    else{
        echo "<script>alert('incorrect details');</script>";
        header("location:admin.php");
    }
}

?>