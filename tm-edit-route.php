<?php
require_once "praveenlib.php";
require_once "datas.php";

$dbconnection = connectSQL($dbdetails);

if (mysqli_connect_errno()) //Check if any error occurred on connection
{
    echo "db_connection_fail";
} else {
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $query = "select * from tm_bus_route where institute_id={$institutionId} && route_number=" . $id . "  limit 1";

        if ($result = $dbconnection->query($query)) {
            if ($result->num_rows == 1) {


                $row = $result->fetch_array();
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
                                    <h1>Edit Route</h1>
                                </div>
                                <?php printModuleButton(); ?>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="box box-bordered box-color">
                                <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Edit Route</h3>
                                </div>
                                <div class="box-content nopadding">
                                    <form name="main-form" action="tm-edit-route-submit.php" method="POST"
                                          class='form-horizontal form-bordered'>
                                        <div class="control-group">
                                            <label for="route-number" class="control-label">Route Number</label>

                                            <div class="controls">
                                                <input type="text" name="number" id="route-number" placeholder=""
                                                       class="input-xlarge"
                                                       readonly value="<?php echo $id ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="start" class="control-label">Starting Location</label>

                                            <div class="controls">
                                                <input type="text" name="start" placeholder="Stop Number"
                                                       class="input-xlarge"
                                                       value="<?php echo $row['start_location'] ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="end" class="control-label">Ending Location</label>

                                            <div class="controls">
                                                <input type="text" name="end" placeholder="Stop Number"
                                                       class="input-xlarge" value="<?php echo $row['end_location'] ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="start-time" class="control-label">Start Time</label>

                                            <div class="bootstrap-timepicker input-append controls"
                                                 style="display:block;">
                                                <input type="text" name="time" id="timepicker1" placeholder=""
                                                       class="input-xlarge" value="<?php echo $row['start_time'] ?>">
                                                <span class="add-on"><i class="icon-time"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <a href="tm-manage-routes.php">
                                                <button type="button" class="btn">Cancel</button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </body>


                <script type="text/javascript">
                    $('#timepicker1').timepicker({minuteStep: 1});
                </script>
                </html>


            <?php
            }
        } else {
            echo $dbconnection->error;
        }
    }
}
?>