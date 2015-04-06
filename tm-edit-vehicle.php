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
    $query = "select * from tm_vehicle_details where institute_id={$institutionId} && number='". $id."'  limit 1";

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
                                <h1>Add Vehicle</h1>
                            </div>
                            <?php printModuleButton(); ?>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="box box-bordered box-color">
                            <div class="box-title">
                                <h3><i class="icon-th-list"></i> New Vehicle</h3>
                            </div>
                            <div class="box-content nopadding">
                                <form name="main-form" action="tm-edit-vehicle-submit.php"  method="POST" class='form-horizontal form-bordered'>
                                    <div class="control-group">
                                        <label for="number" class="control-label">Vehicle Number</label>
                                        <div class="controls">
                                            <input type="text" name="number" id="textfield" placeholder="Example: TN21AB1234" class="input-xlarge"
                                                readonly value="<?php echo $id ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="type" class="control-label">Vehicle Type</label>
                                        <div class="controls">
                                            <select name="type" id="select" class='input-large'>
                                                <option value="1" <?php if($row['type']==1) echo "selected"?> >BUS</option>
                                                <option value="2" <?php if($row['type']==2) echo "selected"?> >MINI BUS</option>
                                                <option value="3" <?php if($row['type']==3) echo "selected"?> >VAN</option>
                                                <option value="4" <?php if($row['type']==4) echo "selected"?> >CAR</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="capacity" class="control-label">Capacity</label>
                                        <div class="controls">
                                            <input type="text" name="capacity" id="textfield" placeholder="Seat count"
                                                   class="input-xlarge" value="<?php echo $row['capacity'] ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label for="route" class="control-label">Route Number</label>
                                        <div class="controls">

                                            <select name="route" id="select1" class='input-large'>
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
                                                    $sql="select * from tm_bus_route where institute_id={$institutionId}";

                                                    $result=mysqli_query($dbconnection,$sql);

                                                    while($row1=mysqli_fetch_array($result))
                                                    {
                                                        if($row1['route_number']==$row['route'])
                                                            echo '<option value="'.$row1['route_number'].'" selected >'.$row1['route_number'].'</option>';
                                                        else
                                                            echo '<option value="'.$row1['route_number'].'">'.$row1['route_number'].'</option>';

                                                    }
                                                }
                                                ?>


                                            </select>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label for="condition" class="control-label">Condition</label>
                                        <div class="controls">
                                            <input type="text" name="condition" id="textfield" placeholder="" class="input-xlarge"
                                                   value="<?php echo $row['vehicle_condition'] ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="status" class="control-label">Status</label>
                                        <div class="controls">
                                            <input type="text" name="status" id="textfield" placeholder="" class="input-xlarge"
                                                   value="<?php echo $row['vehicle_status'] ?>">
                                        </div>
                                    </div>


                                    <div class="form-actions">
                                        <button  type="button" onclick="validate()" class="btn btn-primary">Save</button>
                                        <a href="tm-manage-vehicles.php">
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
<script>
    function validate(){
        var count=document.forms['main-form']['capacity'].value;
        if(isNaN(count)||count==='')alert('Fill details properly');
        else document.forms['main-form'].submit();

    }
</script>
            </html>




        <?php
        }
    }else{
        echo 'error';
    }
}
}
?>