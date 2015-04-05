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
                            <h1>Route Passengers</h1>
                        </div>
                        <?php printModuleButton(); ?>
                    </div>
                </div>
        <div class="row-fluid">
            <div class="span5">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label for="textfield" class="control-label">Route Number</label>
                        <div class="controls">
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
                                $query = "select route_number from tm_bus_route WHERE institute_id={$institutionId}";
                                if($result = $dbconnection->query($query)){
                                    if($result){
                                        echo '<select name="routenum" id="routenum" class="input-large" onchange="selectpost()" >';
                                        echo '<option value="-1" selected>select route</option>';
                                        while($row = $result->fetch_array()){
                                            echo '<option value="'.$row['route_number'].'" class="form-control">'.$row['route_number'].'</option>';
                                        }
                                        echo '</select>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
            <div class="span4 loading" style="visibility: hidden">
                <p><img src="img/load.GIF" alt="loader"/> Loading</p>
            </div>
        </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="box box-color box-bordered">
                            <div class="box-title">
                                <h3>
                                    <i class="icon-table"></i>
                                    Passengers
                                </h3>
                            </div>
                            <div class="box-content nopadding">
                                <table class="table table-hover table-nomargin table-bordered dataTable-columnfilter dataTable">
                                    <thead>
                                        <tr>
                                            <th>Stop</th>
                                            <th>Name</th>
                                            <th class="hidden-350">Passenger Id</th>
                                            <th class="hidden-480">Passenger Type</th>
                                        </tr>
                                        <tr class="thefilter">
                                            <th>Stop</th>
                                            <th>Name</th>
                                            <th class="hidden-350">Passenger Id</th>
                                            <th class="hidden-480">Passenger Type</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabledata">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<script>
    function selectpost(){
        var route=document.getElementById("routenum").value;
        $(".loading").css('visibility','visible');
        $.post("passengers.php",{
                route: route
            },function(data,status){
                $(".loading").css('visibility','hidden');
                $( "#tabledata" ).empty().append(data);
            }
        );
    };
</script>
</html>
<?php
}else{
    header('location:'.$loginurl);
}
?>