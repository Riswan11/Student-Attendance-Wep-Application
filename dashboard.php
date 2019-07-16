<html>
<?php
session_start();
if(!isset($_SESSION['student_id'])){
    header("index.php");
}
$id=$_SESSION['Student_id'];
?>
<?php include("includes/header.php");
require("config.php");?>
<body>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper #4a148c purple darken-4">
            <a href="#" class="brand-logo hide-on-med-and-down hide-on-small-and-down #ffc107 amber-text">
                <img src="./images/1200px-Alcorn_State_University_Seal.svg.png" width="4%">
                Attendance App</a>
        </div>
    </nav>
</div>
<br>
<?php
$sql="SELECT * FROM tbl_student_information where Student_id='$id'";
$run=mysqli_query($con, $sql) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($run);
if($row){
    $id=$row['id'];
    $student_id=$row['Student_id'];
    $student_name=$row['Student_Name'];
    $class_no=$row['Class_No'];
    $instructor=$row['Instructor_Name'];
    $semester=$row['Semester'];
}
?>

    <button type="submit" class="btn red right" id="log">Logout</button>

<div class="row">
    <div class="col l4">
        <ul class="collection">
            <li class="collection-header"><h4 class="blue-text">Student Information</h4></li>
            <li class="collection-item"><h5>Student ID:<?php echo " ".$student_id;?> </h5></li>
            <li class="collection-item"><h5>Student Name:<?php echo " ".$student_name;?> </h5></li>
            <li class="collection-item"><h5>Instructor Name:<?php echo " ".$instructor;?> </h5></li>
            <li class="collection-item"><h5>Semester:<?php echo " ".$semester;?> </h5></li>
        </ul>
    </div>
</div>
<?php
$today=date('Y-m-d');
$time= date('h:i:sa');

?>
<script>
    $(function () {
        var id="<?php echo $id;?>";
        var the_date="<?php echo $today;?>";
        var the_time="<?php echo $time;?>";

        $.ajax({
            type:"post",
            url:"enroll.php",
            data:{id:id, 
            the_date:the_date,
            the_time:the_time
            },
            success:function (en) {
                alert(en);
            }
        });

        $("#log").click(function () {
            var user_id="<?php echo $id;?>";
            var the_time="<?php echo $time;?>";
            alert(the_time);
            $.ajax({
                type:"post",
                url:"logout.php",
                 data:{user_id:user_id,
                 the_time:the_time},
                success:function (al) {
                    alert(al);
                     if(al=="1"){
                         window.location.href="index.php";
                     }
                 }
            });
        });

    })
</script>


<script src="materialize/js/materialize.min.js"></script>

</body>
</html>