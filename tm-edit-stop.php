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
        $query = "select * from tm_bus_stop where institute_id={$institutionId} && id=" . $id . "  limit 1";

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
                                    <h1>Edit Stop</h1>
                                </div>
                                <?php printModuleButton(); ?>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="box box-bordered box-color">
                                <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Edit Stop</h3>
                                </div>
                                <div class="box-content nopadding">
                                    <form name="main-form" action="tm-edit-stop-submit.php" method="POST"
                                          class='form-horizontal form-bordered'>
                                        <div class="control-group">
                                            <label for="name" class="control-label">Stop Name</label>

                                            <div class="controls">
                                                <input type="text" name="name" id="textfield" placeholder=""
                                                       class="input-xlarge"
                                                       value="<?php echo $row['name'] ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label for="number" class="control-label">Stop Number</label>

                                            <div class="controls">
                                                <input type="text" name="number" id="textfield" placeholder=""
                                                       class="input-xlarge"
                                                       readonly value="<?php echo $row['id'] ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="routenumber" class="control-label">Route Number</label>

                                            <div class="controls">

                                                <select name="routenumber" id="select1" class='input-large'>
                                                    <?php
                                                    require_once "praveenlib.php";
                                                    require_once "datas.php";

                                                    $dbconnection = connectSQL($dbdetails);

                                                    if (mysqli_connect_errno()) //Check if any error occurred on connection
                                                    {
                                                        echo "db_connection_fail";
                                                    } else {
                                                        $sql = "select * from tm_bus_route where institute_id={$institutionId}";

                                                        $result = mysqli_query($dbconnection, $sql);

                                                        while ($row1 = mysqli_fetch_array($result)) {
                                                            if ($row1['route_number'] == $row['route'])
                                                                echo '<option value="' . $row1['route_number'] . '" selected >' . $row1['route_number'] . '</option>';
                                                            else
                                                                echo '<option value="' . $row1['route_number'] . '">' . $row1['route_number'] . '</option>';

                                                        }
                                                    }
                                                    ?>


                                                </select>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <label for="distance" class="control-label">Distance From Start</label>

                                            <div class="controls">
                                                <input type="text" name="distance" id="textfield" placeholder=""
                                                       class="input-xlarge"
                                                       value="<?php echo $row['distance'] ?>">(meters-)
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="eta" class="control-label">Estimated Time From Start</label>

                                            <div class="controls">
                                                <input type="text" name="eta" id="textfield" placeholder=""
                                                       class="input-xlarge"
                                                       value="<?php echo $row['estimated_time'] ?>">
                                            </div>
                                        </div>
                                </div>

                                <div class="form-actions">
                                    <button type="button" onclick="validate()" class="btn btn-primary">Save</button>
                                    <a href="tm-manage-stop.php">
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
                <script>
                    function validate() {

                        var number = document.forms['main-form']["number"].value;
                        var route_number = document.forms['main-form']['routenumber'].value;
                        var distance = document.forms['main-form']['distance'].value;


                        if (isNaN(number) || number === '' || route_number === '' || distance === '' || isNaN(distance)) {
                            alert("Enter details Properly");
                            return;
                        }
                        document.forms['main-form'].submit();
                    }
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