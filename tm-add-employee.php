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
                    <h1>Assign Enployee</h1>
                </div>
                <?php printModuleButton(); ?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="box box-bordered box-color">
                <div class="box-title">
                    <h3><i class="icon-th-list"></i> New Employee</h3>
                </div>
                <div class="box-content nopadding">
                    <form name="main-form" onsubmit="return false;" action="" method="POST" class='form-horizontal form-bordered'>
                        <div class="control-group">
                            <label for="id" class="control-label">Employee Id</label>
                            <div class="controls">
                                <input type="text" name="id" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="name" class="control-label">Employee Name</label>
                            <div class="controls">
                                <input type="text" name="name" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="role" class="control-label">Employee Role</label>
                            <div class="controls">
                                <select name="role" id="select" class='input-large'>
                                    <option value="driver">Driver</option>
                                    <option value="conductor">Conductor</option>
                                    <option value="dirverconductor">Driver and Conductor</option>


                                </select>

                            </div>
                        </div>

                        <div class="control-group">
                            <label for="license-number" class="control-label">License Number</label>
                            <div class="controls">
                                <input type="text" name="license-number" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>


                        <div class="control-group">
                            <label for="expiry" class="control-label">License Expiry date</label>
                            <div class="controls">
                                <input type="text" name="expiry" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="status" class="control-label">Employee Status</label>
                            <div class="controls">
                                <input type="text" name="status" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="verificaion" class="control-label">Verification</label>
                            <div class="controls">
                                <input type="text" name="verification" id="textfield" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button onclick="send();" type="button" class="btn btn-primary">Save</button>
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
<script>
    function send(){
        var id=document.forms['main-form']['id'].value;
        var role=document.forms['main-form']['role'].value;
        var name=document.forms['main-form']["name"].value;
        var license=document.forms['main-form']['license-number'].value;
        var expiry=document.forms['main-form']['expiry'].value;
        var status=document.forms['main-form']['status'].value;
        var verification=document.forms['main-form']['verification'].value;


        $('button').attr('disabled',true);
        $.post("add_employee.php",{

            id:id,
            role:role,
            name:name,
            license:license,
            expiry:expiry,
            status:status,
            verification:verification
        },function(data,status){
            $('button').attr('disabled',false);
            if(status==="success"){
                alert(data);
                if(data==='success')document.forms['main-form'].reset();

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