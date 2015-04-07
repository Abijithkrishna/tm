<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edufee</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.css"/>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/student.css"/>
    <link rel="shortcut icon" href="img/favicon.ico"/>
</head>
<body style="padding: 0px">
<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" id="navigation" href="#"></a>
        <ul class="nav pull-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Account
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="studentlogin.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span4 offset4">
            <?php
            require_once('praveenlib.php');
            require_once('datas.php');
            $key = array('email','password');
            if(checkPOST($key)){
                $db = connectSQL($dbdetails);
            if (mysqli_connect_errno()) //Check if any error occurred on connection
            {
                echo "db_connection_fail";
            } else {
                $email = $_POST['email'];
                ?>
                <table class="table table-bordered table-hover">
                    <?php
                        $query = "select * from students where email_id='{$email}'";
                        $result = $db->query($query);
                        $row = $result->fetch_array();
                        echo '<tr><td>First Name:</td><td>'.$row["first_name"].'</td></tr>';
                        echo '<tr><td>Last Name:</td><td>'.$row["last_name"].'</td></tr>';
                        echo '<tr><td>Email:</td><td>'.$row["email_id"].'</td></tr>';
                    $instid= $row['school_id'];
                    $id=$row['student_id'];
                    $query1 = "select * from tm_passengers WHERE institute_id={$instid} && id={$id}";
                    if($result1 = $db->query($query1)){
                    $rows=$result1->num_rows;
                    if($rows > 0){
                        $row1=$result1->fetch_array();
                        echo '<tr><td>Route:</td><td>'.$row1["route"].'</td></tr>';
                        echo '<tr><td>Stop:</td><td>'.$row1["stop"].'</td></tr>';
                        $query2= "select * from tm_vehicle_details where route=".$row1['route']." AND institute_id={$instid}";
                        if($result2= $db->query($query2)){
                            $row2=$result2->fetch_array();
                            echo '<tr><td>Driver:</td><td>'.$row2["driver"].'</td></tr>';
                            echo '<tr><td>Conductor:</td><td>'.$row2["conductor"].'</td></tr>';
                        }
                    }else{
                        echo '<tr><td colspan="2">Transport Details Not Assigned</td></tr>';
                    }}
                    else{
                        echo "db-error";
                    }
                    ?>
                </table>
            <?php
            }
            }else{
                echo "Insufficient data";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>