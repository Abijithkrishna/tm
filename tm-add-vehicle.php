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
                        <h1>Add Vehicle</h1>
                    </div>

<<<<<<< HEAD
                    <?php printModuleButton(); ?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="box box-bordered box-color">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i> New Vehicle</h3>
                    </div>
                    <div class="box-content nopadding">
                        <form name="main-form" action="return false;" method="POST"
                              class='form-horizontal form-bordered'>
                            <div class="control-group">
                                <label for="vehicle-number" class="control-label">Vehicle Number</label>
=======
					<?php printModuleButton(); ?>
				</div>
			</div>
			<div class="container-fluid">
			<div class="box box-bordered box-color">
							<div class="box-title">
								<h3><i class="icon-th-list"></i> New Vehicle</h3>
							</div>
							<div class="box-content nopadding">
								<form name="main-form" action="return false;" method="POST" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="vehicle-number" class="control-label">Vehicle Number</label>
										<div class="controls">
											<input type="text" name="vehicle-number" id="textfield" placeholder="Example: TN21AB1234" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="type" class="control-label">Vehicle Type</label>
										<div class="controls">
											<select name="type" id="select" class='input-large'>
												<option value="1">BUS</option>
												<option value="2">MINI BUS</option>
												<option value="3">VAN</option>
												<option value="4">CAR</option>
												
											</select>
										</div>
									</div>
									<div class="control-group">
										<label for="capacity" class="control-label">Capacity</label>
										<div class="controls">
											<input type="text" name="capacity" id="textfield" placeholder="Seat count" class="input-xlarge">
										</div>
									</div>

									<div class="control-group">
										<label for="route-number" class="control-label">Route Number</label>
										<div class="controls">

											<select name="route-number" id="select1" class='input-large'>
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

													while($row=mysqli_fetch_array($result))
													{
														echo '<option value="'.$row['route_number'].'">'.$row['route_number'].'</option>';

													}
												}
												?>


											</select>
										</div>
									</div>

									<div class="control-group">
										<label for="condition" class="control-label">Condition</label>
										<div class="controls">
											<input type="text" name="condition" id="textfield" placeholder="" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="status" class="control-label">Status</label>
										<div class="controls">
											<input type="text" name="status" id="textfield" placeholder="" class="input-xlarge">
										</div>
									</div>
>>>>>>> 3172f58e9af6dbaea44de720172b837b19f50666

                                <div class="controls">
                                    <input type="text" name="vehicle-number" id="textfield"
                                           placeholder="Example: TN21AB1234" class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="type" class="control-label">Vehicle Type</label>

                                <div class="controls">
                                    <select name="type" id="select" class='input-large'>
                                        <option value="1">BUS</option>
                                        <option value="2">MINI BUS</option>
                                        <option value="3">VAN</option>
                                        <option value="4">CAR</option>

                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="capacity" class="control-label">Capacity</label>

<<<<<<< HEAD
                                <div class="controls">
                                    <input type="text" name="capacity" id="textfield" placeholder="Seat count"
                                           class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="condition" class="control-label">Condition</label>
=======
</body>
<script>
	function send(){
		var number=document.forms['main-form']['vehicle-number'].value;
		var route=document.forms['main-form']['route-number'].value;
		var type=document.forms['main-form']["type"].value;
		var capacity=document.forms['main-form']['capacity'].value;
		var condition=document.forms['main-form']['condition'].value;
		var status=document.forms['main-form']['status'].value;
		if(number!==''&&capacity!==''&&!isNaN(capacity)&&route!=='') {
>>>>>>> 3172f58e9af6dbaea44de720172b837b19f50666

                                <div class="controls">
                                    <input type="text" name="condition" id="textfield" placeholder=""
                                           class="input-xlarge">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="status" class="control-label">Status</label>

<<<<<<< HEAD
                                <div class="controls">
                                    <input type="text" name="status" id="textfield" placeholder="" class="input-xlarge">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button onclick="send();" type="button" class="btn btn-primary">Save</button>
                                <a href="tm-manage-vehicles.php">
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
        function send() {
            var number = document.forms['main-form']['vehicle-number'].value;
            var type = document.forms['main-form']["type"].value;
            var capacity = document.forms['main-form']['capacity'].value;
            var condition = document.forms['main-form']['condition'].value;
            var status = document.forms['main-form']['status'].value;
            if (number !== '' && capacity !== '' && !isNaN(capacity)) {

                $('button').attr('disabled', true);
                $.post("add_vehicle.php", {

                    number: number,
                    type: type,
                    capacity: capacity,
                    condition: condition,
                    status: status
                }, function (data, status) {
                    $('button').attr('disabled', false);
                    if (status === "success") {
                        alert(data);
                        if (data === "success")document.forms['main-form'].reset();
                    }
                });
            } else {
                alert('Fill details Properly');
            }
        }
    </script>
    </html>
=======
				number: number,
				type: type,
				capacity: capacity,
				route:route,
				condition: condition,
				status: status
			}, function (data, status) {
				$('button').attr('disabled', false);
				if (status === "success") {
					alert(data);
					if (data === "success")document.forms['main-form'].reset();
				}
			});
		}else {
			alert('Fill details Properly');}
	}
</script>
</html>
>>>>>>> 3172f58e9af6dbaea44de720172b837b19f50666

<?php
} else {
    header('location:' . $loginurl);
}
?>