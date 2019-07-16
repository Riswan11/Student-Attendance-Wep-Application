<?php
include("config.php");
$id=$_POST['id'];
$today=$_POST['the_date'];
$the_time=$_POST['the_time'];
$check="SELECT * FROM tbl_student_enrollment WHERE id=$id and the_day='$today'";
$run_check=mysqli_query($con, $check);
$run_fetch=mysqli_fetch_assoc($run_check);
if($run_fetch){
    echo "You are Already Present in the Class";
}
else{
    $sq="INSERT INTO tbl_student_enrollment(id, the_day, Time_In, Memo) 
VALUES($id, '$today', '$the_time', 'Present')";
    $run=mysqli_query($con, $sq) or die(mysqli_error($con));
    if($run){
        echo "Marked Present";
    }
    else{
        echo "Couldnt insert";
    }
}



