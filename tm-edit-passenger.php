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
$query = "select * from tm_passengers where institute_id={$institutionId} && id='". $id."'  limit 1";

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
                    <h1>Assign Passenger</h1>
                </div>
                <?php printModuleButton(); ?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="box box-bordered box-color">
                <div class="box-title">
                    <h3><i class="icon-th-list"></i> New Passenger</h3>
                </div>
                <div class="box-content nopadding">
                    <form name="main-form"  action="tm-edit-passenger-submit.php" method="POST" class='form-horizontal form-bordered'>
                        <div class="control-group">
                            <label for="id" class="control-label">Passenger Id</label>
                            <div class="controls">
                                <input type="text" name="id" id="textfield" placeholder="" class="input-xlarge"
                                    readonly value="<?php echo $row['id'] ?>">
                            </div>
                        </div>


                        <div class="control-group">
                            <label for="route" class="control-label">Route Number</label>
                            <div class="controls">
                                <select onchange="updateStop();" name="route" id="select1" class='input-large'>
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


                                </select><div id="loading" hidden="true">Loading stops..</div>
                            </div>
                        </div>
                        <div id="stopsblock">
                            <div class="control-group">
                                <label for="stop" class="control-label">Stop Number</label>
                                <div class="controls">

                                    <select name="stop" id="select2" class='input-large'>
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
                                            $sql="select * from tm_bus_stop where institute_id={$institutionId} and route=".$row['route'];

                                            $result=mysqli_query($dbconnection,$sql);

                                            while($row1=mysqli_fetch_array($result))
                                            {
                                                if($row1['id']==$row['stop'])
                                                    echo '<option value="'.$row1['id'].'" selected >'.$row1['id']." (".$row1['name'].')</option>';
                                                else
                                                    echo '<option value="'.$row1['id'].'">'.$row1['id']." (".$row1['name'].')</option>';

                                            }
                                        }
                                        ?>


                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button  type="submit" class="btn btn-primary">Save</button>
                            <a href="tm-manage-passenger.php">
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
        function updateStop(){
            var route=document.forms['main-form']["route"].value;

            $('#loding').show();
            $.post("tm-get-stops.php",{
                route:route
            },function(data,status){
                $('#loding').hide();

                document.getElementById("stopsblock").innerHTML=data;

            });
        }

    </script>
</html>



<?php
}
}else{
    echo $dbconnection->error;
}
}
}
?>