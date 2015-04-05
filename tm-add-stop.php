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
						<h1>Add Stop</h1>
					</div>
					<?php printModuleButton(); ?>
				</div>
			</div>
			<div class="container-fluid">
			<div class="box box-bordered box-color">
							<div class="box-title">
								<h3><i class="icon-th-list"></i> New Stop</h3>
							</div>
							<div class="box-content nopadding">
								<form  name="main-form" method="POST" class='form-horizontal form-bordered' onsubmit="return false;">
									<div class="control-group">
										<label for="stop-name" class="control-label">Stop Name</label>
										<div class="controls">
											<input type="text" name="stop-name" id="textfield" placeholder="" class="input-xlarge">
										</div>
									</div>									
									
									<div class="control-group">
										<label for="stop-number" class="control-label">Stop Number</label>
										<div class="controls">
											<input type="text" name="stop-number" id="textfield" placeholder="" class="input-xlarge">
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
													$sql="select * from tm_bus_route where institute_id={}";

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
										<label for="distance" class="control-label">Distance From Start</label>
										<div class="controls">
											<input type="text" name="distance" id="textfield" placeholder="" class="input-xlarge">(meters-)
										</div>
									</div>
									<div class="control-group">
										<label for="eta" class="control-label">Estimated Time From Start</label>
										<div class="bootstrap-timepicker input-append controls" style="display:block;">
											<input name="eta" id="timepicker1" placeholder="" class="input-xlarge" type="text">
											<span class="add-on"><i class="icon-time"></i></span>
										</div>
									</div>
									</div>
									<!--
									<div class="control-group">
										<label for="password" class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="password" placeholder="Password input" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkboxes<small>More information here</small></label>
										<div class="controls">
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
											</label>
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> ipsum eiusmod
											</label>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">Textarea</label>
										<div class="controls">
											<textarea name="textarea" id="textarea" rows="5" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
										</div>
									</div>
									-->
									<div class="form-actions">
										<button onclick="send();" type="button" class="btn btn-primary">Save</button>
										<a href="tm-manage-stop.php">
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
<script src="js/jquery-ui.min.js"></script>

<script>
	$('#select1').combobox();

</script>
<script>
function send(){
	var name=document.forms['main-form']['stop-name'].value;
	var number=document.forms['main-form']["stop-number"].value;
	var route_number=document.forms['main-form']['route-number'].value;
	var distance=document.forms['main-form']['distance'].value;
	var eta=document.forms['main-form']['eta'].value;
	$('button').attr('disabled',true);
	$.post("add_stop.php",{
		name:name,
		number:number,
		routenumber:route_number,
		distance:distance,
		eta:eta
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