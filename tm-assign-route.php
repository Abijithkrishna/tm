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
                    <h1>Assign Vehicle</h1>
                </div>

                <?php printModuleButton(); ?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="box box-bordered box-color">
                <div class="box-title">
                    <h3><i class="icon-th-list"></i> Assign Route</h3>
                </div>
                <div class="box-content nopadding">
                    <form name="main-form" onsubmit="return false;" action="" method="POST" class='form-horizontal form-bordered'>
                        <div class="control-group">
                            <label for="number" class="control-label">Vehicle Number</label>
                            <div class="controls">
                                <input type="text" name="number" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="route-number" class="control-label">Route Number</label>
                            <div class="controls">
                                <input type="text" name="route-number" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>



                        <!--
                        <div class="control-group">
                            <label for="" class="control-label"></label>
                            <div class="controls">
                                <input type="text" name="" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                    -->
                        <div class="form-actions">
                            <button onclick="send();" type="button" class="btn btn-primary">Save</button>
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
    function send(){
        var number=document.forms['main-form']['number'].value;
        var route=document.forms['main-form']['route-number'].value;



        $('button').attr('disabled',true);
        $.post("assign_route.php",{

            number:number,
            route:route
        },function(data,status){
            $('button').attr('disabled',false);
            if(status==="success"){
                alert(data);

            }
        })
    }
</script>
</html>

<?php
}else{
    header('location:'.$loginurl);
}
?>