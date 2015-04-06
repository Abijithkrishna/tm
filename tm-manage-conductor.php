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
                    <h1>Manage Conductor</h1>
                </div>

                <?php printModuleButton(); ?>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div class="box box-color box-bordered">
                        <div class="box-title">
                            <h3>
                                <i class="icon-table"></i>
                                Conductor Details
                            </h3>
                            <div class="pull-right" style="margin-right: 5px;">
                                <ul class="pull-right stats"><li class="lightred">
                                        <a href="tm-assign-conductor.php">
                                            <div  style="margin-right: 5px;">

                                                <h3>Assign Conductor</h3>

                                            </div>
                                        </a>
                                    </li></ul>
                            </div>
                        </div>
                        <div class="box-content nopadding">
                            <table class="table table-hover table-nomargin table-bordered">
                                <thead>
                                <tr>
                                    <th>Conductor ID</th>
                                    <th>Conductor Name</th>
                                    <th class='hidden-350'>Vehicle Assigned</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
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
                                    $sql="select * from tm_employee WHERE (role='conductor' or role='dirverconductor')
and not vehicle is NULL and institute_id={$institutionId}";

                                    $result=mysqli_query($dbconnection,$sql);

                                    while($row=mysqli_fetch_array($result))
                                    {
                                        echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td class="hidden-350">'
                                            .$row['vehicle'].'</td><td><button class="edit btn btn-warning" value="'.$row['id']
                                            .'"><i class="icon-edit"></i>Edit</button><span>&nbsp&nbsp</span>
                                            <button class="delete btn btn-warning" value="'.$row['id']."`".$row['vehicle']
                                            .'"><i class="icon-trash"></i>Delete</button></td></tr>';
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
        id=this.value;
        window.location.href="tm-edit-conductor.php?id="+id;
    });
    $(".delete").click(function () {
        id=this.value;
        var ans=confirm("Are you sure to delete route "+id);
        if(ans)
        {
            var saveButton=$(this);
            saveButton.attr("disabled",true);
            $.post("tm-delete-conductor.php",{
                id:id
            },function(data,status){



                if (data === 'success')
                    window.location.reload();
                else alert(data);
                saveButton.attr('disabled',false);

            });


        }
    });
</script>
</html>

<?php
}else{
    header('location:'.$loginurl);
}
?>