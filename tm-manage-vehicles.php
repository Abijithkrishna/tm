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
                        <h1>Vehicle Details</h1>
                    </div>

                    <?php printModuleButton(); ?>
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <div class="box box-color box-bordered">
                            <div class="box-title">
                                <h3>
                                    <i class="icon-table"></i>
                                    Vehicle Details
                                </h3>

                                <div class="pull-right" style="margin-right: 5px;">
                                    <ul class="pull-right stats">
                                        <li class="lightred">
                                            <a href="tm-add-vehicle.php">
                                                <div style="margin-right: 5px;">

                                                    <h3>Add Vehicle</h3>

                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-content nopadding">
                                <table class="table table-hover table-nomargin table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Type</th>
                                        <th class='hidden-350'>Capacity</th>
                                        <th class="hidden-480">Condition</th>
                                        <th class='hidden-1024'>Status</th>
                                        <th class="hidden-1024">Route</th>
                                        <th class="hidden-1024">Driver</th>
                                        <th class="hidden-1024">Conductor</th>
                                        <th></th>
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
                                            echo '<tr><td>' . $row['number'] . '</td><td>' . $row['type'] . '</td><td class="hidden-350">'
                                                . $row['capacity'] . '</td><td class="hidden-480">' . $row['vehicle_condition']
                                                . '</td><td class="hidden-1024">' . $row['vehicle_status'] . '</td><td class="hidden-1024">'
                                                . $row['route'] . '</td><td class="hidden-1024">' . $row['driver'] . '</td><td class="hidden-1024">'
                                                . $row['conductor'] . '</td><td><button class="edit btn btn-warning" value="' . $row['number']
                                                . '"><i class="icon-edit"></i>Edit</button><span>&nbsp&nbsp</span><button class="delete btn btn-warning" value="' . $row['number']
                                                . '"><i class="icon-trash"></i>Delete</button></td></tr>';
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
    </body>

    <script>
        $(".edit").click(function () {
            id = this.value;
            window.location.href = "tm-edit-vehicle.php?id=" + id;
        });
        $(".delete").click(function () {
            number = this.value;
            var ans = confirm("Are you sure to delete route " + number);
            if (ans) {
                var saveButton = $(this);
                saveButton.attr("disabled", true);
                $.post("tm-delete-vehicle.php", {
                    number: number
                }, function (data, status) {
                    alert(data);
                    if (data === 'success')
                        window.location.reload();
                    else alert(data);
                    saveButton.attr('disabled', false);
                });


            }
        });
    </script>
    </html>


<?php
} else {
    header('location:' . $loginurl);
}
?>