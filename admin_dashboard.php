<html>
<?php
session_start();
if(!isset($_SESSION['student_id'])){
    header("index.php");
}
$id=$_SESSION['admin_username'];
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
<h4>Welcome <?php echo $id; ?></h4>
<button type="submit" class="btn red right" id="log">Logout</button>

<script>
    $(function () {
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