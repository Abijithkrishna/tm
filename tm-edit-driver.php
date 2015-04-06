<!doctype html>
<html>

<?php
require_once "cms.php";
printHead();
?>

<body>
<?php


if (isset($_POST['number']) && isset($_POST['driver'])) {
    require_once "praveenlib.php";
    require_once "datas.php";

    $dbconnection = connectSQL($dbdetails);

    if (mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    } else {
        $sql = "update tm_employee set vehicle='" . $_POST['number'] . "' WHERE institute_id={$institutionId} && id=" . $_POST['driver'] . ";"
            . "update tm_vehicle_details set driver=NULL where institute_id={$institutionId} && driver=" . $_POST['driver'] . ";"
            . "update tm_vehicle_details set driver=" . $_POST['driver'] . " where institute_id={$institutionId} && number='" . $_POST['number'] . "';";

        $result = mysqli_multi_query($dbconnection, $sql);

        if ($result) {
            header("location:tm-manage-driver.php");
            ?>
            <script>
                alert("Driver Assigned");
            </script>
        <?php
        } else echo $dbconnection->error;
    }

}
?>
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
                    <h1>Assign Employee</h1>
                </div>
                <?php printModuleButton(); ?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="box box-bordered box-color">
                <div class="box-title">
                    <h3><i class="icon-th-list"></i> Assign Driver</h3>
                </div>
                <div class="box-content nopadding">
                    <form name="main-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"
                          class='form-horizontal form-bordered'>
                        <div class="control-group">
                            <label for="driver" class="control-label">Driver ID</label>

                            <div class="controls">

                                <input type="text" name="driver" class='input-large' value="<?php echo $_GET['id']; ?>"
                                       readonly>

                            </div>
                        </div>
                        <div class="control-group">
                            <label for="number" class="control-label">Vehicle Number</label>

                            <div class="controls">

                                <select name="number" id="select1" class='input-large'>
                                    <?php
                                    require_once "praveenlib.php";
                                    require_once "datas.php";

                                    $dbconnection = connectSQL($dbdetails);

                                    if (mysqli_connect_errno()) //Check if any error occurred on connection
                                    {
                                        echo "db_connection_fail";
                                    } else {
                                        $sql = "select * from tm_vehicle_details where institute_id={$institutionId} && driver is NULL";

                                        $result = mysqli_query($dbconnection, $sql);

                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row['number'] . '">' . $row['number'] . '</option>';

                                        }
                                    }
                                    ?>


                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="tm-manage-driver.php">
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
<script src="js/jquery-ui.min.js"></script>

<script>
    $('#select1').combobox();

</script>
</html>

