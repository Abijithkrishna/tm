<?php
require_once "praveenlib.php";
require_once "datas.php";
if(isset($institutionId)) {
    ?>
    <!doctype html>
<html>
    <?php
    require_once "cms.php";
    printHead();
    ?>

<body>

<?php printNav(); ?>
<div class="container-fluid" id="content">
    <?php
    require_once "cms.php";
    printLeft();
    ?>
    <div id="main">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left">
                    <h1>Route Report</h1>
                </div>
                <?php printModuleButton(); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">

            </div>

        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box box-color box-bordered">
                    <div class="box-title">
                        <h3>
                            <i class="icon-table"></i>
                            Routes
                        </h3>
                        <div class="pull-right" style="margin-right: 5px;">
                                <button class="btn btn-success stops" type="button">Stops</button>
                                <button class="btn btn-success passengers" type="button">Passengers</button>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin table-bordered  dataTable-columnfilter dataTable">
                            <thead>
                            <tr>
                                <th>Route</th>
                                <th>Number</th>
                                <th class='hidden-350'>Driver</th>
                                <th></th>
                            </tr>
                            <tr class="thefilter">
                                <th>Route</th>
                                <th>Number</th>
                                <th class='hidden-350'>Driver</th>
                                <th class='hidden-480'>Conductor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once "praveenlib.php";
                            require_once "datas.php";

                            $dbconnection = connectSQL($dbdetails);

                            if(mysqli_connect_errno()) //Check if any error occurred on connection
                            {
                                echo "db_connection_fail";
                            }
                            else
                            {
                                $sql="select * from tm_vehicle_details where institute_id={$institutionId}";

                                $result=mysqli_query($dbconnection,$sql);

                                while($row=mysqli_fetch_array($result))
                                {
                                    $driver = "select name from tm_employee where id='".$row['driver']."' and institute_id={$institutionId} limit 1";
                                    $conductor = "select name from tm_employee where id='".$row['conductor']."' and institute_id={$institutionId} limit 1";
                                    $driv = $dbconnection->query($driver);
                                    $row1 = $driv->fetch_array();
                                    $cond = $dbconnection->query($conductor);
                                    $row2 = $cond->fetch_array();
                                    echo '<tr><td>'.$row['route'].'</td><td>'.$row['number'].'</td><td class="hidden-350">'
                                    .$row1['name'].' ('.$row['driver'].')</td><td>'.$row2['name'].' ('.$row['conductor'].')</td></tr>';
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<script>
$(".stops").click(function(){
    window.location.href="liststops.php";
});
$(".passengers").click(function(){
    window.location.href="stopdetails.php";
});
</script>
</body>
</html>

<?php
}else{
    header('location:'.$loginurl);
}
?>