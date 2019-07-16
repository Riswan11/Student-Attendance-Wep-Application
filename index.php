<html>
<script type="text/javascript">
    function noBack(){window.history.forward();}
    noBack();
    window.onload=noBack;
    window.onpageshow=function(evt){if(evt.persisted)noBack();}
    window.onunload=function(){void(0);}
</script>
<?php include("includes/header.php")?>
<body>
<div class="container-fluid">
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper #4a148c purple darken-4">
                <a href="#" class="brand-logo hide-on-med-and-down hide-on-small-and-down #ffc107 amber-text"><img src="./images/1200px-Alcorn_State_University_Seal.svg.png" width="4%">
                    Attendance App</a>
            </div>
        </nav>
    </div>
</div>
<br>
<br>
<br>
<div class="row">
<div class="card horizontal col l5 push-l4">
    <div class="card-image">
        <img src="images/index.png" class="circle center">
    </div>
    <form method="post" action="server.php">
    <div class="card-content">
            <div class="input-field ">
                <input id="student_id" type="text" class="validate" name="student_id">
                <label for="student_id">Student ID</label>
            </div>
            <div class="input-field ">
                <input id="course_no" type="text" class="validate" name="course_no">
                <label for="course_no">Course No:</label>
                <button type="submit" name="submit" class="btn #4a148c purple darken-4 waves-effect" id="submit">Login</button>
            </div>
    </div>
    </form>
</div>
</div>

<script src="materialize/js/materialize.min.js"></script>
</body>
</html>