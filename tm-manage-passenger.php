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
                        <h1>Manage Passenger</h1>
                    </div>
                    <?php printModuleButton(); ?>
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <div class="box box-color box-bordered">
                            <div class="box-title">
                                <h3>
                                    <i class="icon-table"></i>
                                    Passenger Details
                                </h3>

                                <div class="pull-right" style="margin-right: 5px;">
                                    <ul class="pull-right stats">
                                        <li class="lightred">
                                            <a href="tm-add-passenger.php">
                                                <div style="margin-right: 5px;">

                                                    <h3>Add Passenger</h3>

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
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Route</th>
                                        <th class='hidden-350'>Stop</th>
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
                                        $sql = "select * from tm_passengers WHERE  institute_id={$institutionId}";

                                        $result = mysqli_query($dbconnection, $sql);

                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<tr><td>' . $row['id'] . '</td><td>' . $row['type'] . '</td><td>' . $row['route'] . '</td><td class="hidden-350">'
                                                . $row['stop'] . '</td><td><button class="edit btn btn-warning" value="' . $row['id']
                                                . '"><i class="icon-edit"></i>Edit</button><span>&nbsp&nbsp</span>
                                            <button class="delete btn btn-warning" value="' . $row['id']
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
            window.location.href = "tm-edit-passenger.php?id=" + id;
        });
        $(".delete").click(function () {
            id = this.value;
            var ans = confirm("Are you sure to delete route " + id);
            if (ans) {
                var saveButton = $(this);
                saveButton.attr("disabled", true);
                $.post("tm-delete-passenger.php", {
                    id: id
                }, function (data, status) {


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