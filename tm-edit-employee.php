<?php
require_once "praveenlib.php";
require_once "datas.php";

$dbconnection = connectSQL($dbdetails);

if(mysqli_connect_errno()) //Check if any error occurred on connection
{
    echo "db_connection_fail";
}
else {
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $query = "select * from tm_employee where institue_id={$institutionId} && id='". $id."'  limit 1";

        if ($result=$dbconnection->query($query)){
            if($result->num_rows==1) {


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
                    <h1>Assign Enployee</h1>
                </div>
                <?php printModuleButton(); ?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="box box-bordered box-color">
                <div class="box-title">
                    <h3><i class="icon-th-list"></i> Edit Employee</h3>
                </div>
                <div class="box-content nopadding">
                    <form name="main-form"  action="tm-edit-employee-submit.php" method="POST" class='form-horizontal form-bordered'>
                        <div class="control-group">
                            <label for="id" class="control-label">Employee Id</label>
                            <div class="controls">
                                <input type="text" name="id" id="textfield" placeholder="" class="input-xlarge"
                                    readonly  value="<?php echo $row['id'] ?>" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="name" class="control-label">Employee Name</label>
                            <div class="controls">
                                <input type="text" name="name" id="textfield" placeholder="" class="input-xlarge"
                                       value="<?php echo $row['name'] ?>" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="role" class="control-label">Employee Role</label>
                            <div class="controls">
                                <select name="role" id="select" class='input-large'>
                                    <option value="driver" <?php if($row['role']=='driver') echo "selected"?>>Driver</option>
                                    <option value="conductor" <?php if($row['role']=='conductor') echo "selected"?>>Conductor</option>
                                    <option value="dirverconductor" <?php if($row['role']=='dirverconductor') echo "selected"?>>Driver and Conductor</option>


                                </select>

                            </div>
                        </div>

                        <div class="control-group">
                            <label for="license" class="control-label">License Number</label>
                            <div class="controls">
                                <input type="text" name="license" id="textfield" placeholder="" class="input-xlarge"
                                       value="<?php echo $row['license_number'] ?>" >
                            </div>
                        </div>


                        <div class="control-group">
                            <label for="expiry" class="control-label">License Expiry date</label>
                            <div class="controls">
                                <input type="text" name="expiry" id="textfield" placeholder="" class="input-xlarge"
                                       value="<?php echo $row['expiry'] ?>" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="status" class="control-label">Employee Status</label>
                            <div class="controls">
                                <input type="text" name="status" id="textfield" placeholder="" class="input-xlarge"
                                       value="<?php echo $row['employee_status'] ?>" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="verificaion" class="control-label">Verification</label>
                            <div class="controls">
                                <input type="text" name="verification" id="textfield" placeholder="" class="input-xlarge"
                                       value="<?php echo $row['verification'] ?>" >
                            </div>
                        </div>
                        <div class="form-actions">
                            <button  type="submit" class="btn btn-primary">Save</button>
                            <a href="tm-manage-employee.php">
                                <button type="button" class="btn" >Cancel</button>
                            </a>

                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>




            <?php
            }
        }else{
            echo $dbconnection->error;
        }
    }
}
?>