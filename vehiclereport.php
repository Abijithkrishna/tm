<?php
require_once "praveenlib.php";
require_once "datas.php";
if (isset($institutionId)) {
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
                        <h1>Vehicle Report</h1>
                    </div>
                    <?php printModuleButton(); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="box box-bordered box-color">
                        <div class="box-title">
                            <h3>
                                <i class="icon-table"></i>
                                Vehicles
                            </h3>
                        </div>
                        <div class="box-content nopadding">
                            <table
                                class="table table-hover table-nomargin table-bordered dataTable-columnfilter dataTable">
                                <thead>
                                <tr>
                                    <th>Vehicle Number</th>
                                    <th>Total Passengers</th>
                                    <th class='hidden-350'>Capacity</th>
                                </tr>
                                <tr class='thefilter'>
                                    <th>Vehicle Number</th>
                                    <th>Total Passengers</th>
                                    <th class='hidden-350'>Capacity</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                require_once "praveenlib.php";
                                require_once "datas.php";

                                $dbconnection = connectSQL($dbdetails);

                                if (mysqli_connect_errno()) //Check if any error occurred on connection
                                {
                                    echo "db_connection_fail";
                                } else {
                                    $sql = "select * from tm_vehicle_details WHERE institute_id={$institutionId}";

                                    $result = mysqli_query($dbconnection, $sql);

                                    while ($row = mysqli_fetch_array($result)) {
                                        $sql1 = "select * from tm_passengers where route=" . $row['route'] . " and institute_id={$institutionId}";
                                        $res = $dbconnection->query($sql1);
                                        $capa = $res->num_rows;
                                        echo '<tr><td>' . $row['number'] . '</td><td>' . $capa . '</td><td class="hidden-350">'
                                            . $row['capacity'] . '</td></tr>';
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
    </body>
    </html>

<?php
} else {
    header('location:' . $loginurl);
}
?>