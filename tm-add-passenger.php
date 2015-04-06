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
								<form name="main-form" onsubmit="return false;" action="" method="POST" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="id" class="control-label">Passenger Id</label>
										<div class="controls">
											<input type="number"  required name="id" id="textfield" placeholder="" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="type" class="control-label">Passenger Id</label>
										<div class="controls">
											<select name="type" id="select" class='input-large'>
											<option	value="student">Student</option>
												<option value="staff">Staff</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label for="routenumber" class="control-label">Route Number</label>
										<div class="controls">

											<select onchange="updateStop();" name="routenumber" id="select1" class='input-large'>
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
														if(!$firstroute)$firstroute=$row['route_number'];
														echo '<option value="'.$row['route_number'].'">'.$row['route_number'].'</option>';

													}
												}
												?>


											</select><div id="loading" hidden="true">Loading stops..</div>
										</div>
									</div>
									<div id="stopsblock">
										<div class="control-group">
											<label for="stopnumber" class="control-label">Stop Number</label>
											<div class="controls">

												<select name="stopnumber" id="select2" class='input-large'>
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
														$sql="select * from tm_bus_stop where institute_id={$institutionId} and route=".$firstroute;

														$result=mysqli_query($dbconnection,$sql);

														while($row=mysqli_fetch_array($result))
														{
															echo '<option value="'.$row['id'].'">'.$row['id']." (".$row['name'].')</option>';

														}
													}
													?>


												</select>
											</div>
										</div>
									</div>

									<div class="form-actions">
										<button onclick="send();" type="button" class="btn btn-primary">Save</button>
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
	function send(){
		var id=document.forms['main-form']['id'].value;
		var route_number=document.forms['main-form']["routenumber"].value;
		var stop_number=document.forms['main-form']['stopnumber'].value;
		var type =document.forms['main-form']['type'].value;

		if(isNaN((id)||id===''||route_number===''||stop_number===''))
		{
			alert("Fill Details properly");
			return;
		}



		$('button').attr('disabled',true);
		$.post("add_passenger.php",{
			id:id,
			type:type,
			route:route_number,
			stop:stop_number
		},function(data,status){
			$('button').attr('disabled',false);
			if(status==="success"){
				alert(data);
				if(data==='success')document.forms['main-form'].reset();

			}
		});
	}



	function updateStop(){
		var route=document.forms['main-form']["routenumber"].value;

		$('#loding').show();
		$.post("tm-get-stops.php",{
			route:route
		},function(data,status){
			$('#loding').hide();

			document.getElementById("stopsblock").innerHTML=data;

		});
	}

</script>
<script src="js/jquery-ui.min.js"></script>

<script>
	$('#select1').combobox();
	$('#select2').combobox();
</script>
</html>

<?php
}else{
	header('location:'.$loginurl);
}
?>