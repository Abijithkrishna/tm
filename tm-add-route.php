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
						<h1>Add Route</h1>
					</div>
					<?php printModuleButton(); ?>
				</div>
			</div>
			<div class="container-fluid">
			<div class="box box-bordered box-color">
							<div class="box-title">
								<h3><i class="icon-th-list"></i> New Route</h3>
							</div>
							<div class="box-content nopadding">
								<form name="main-form" onsubmit="return false;" action="" method="POST" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="route-number" class="control-label">Route Number</label>
										<div class="controls">
											<input type="text" name="route-number"  id="route-number" placeholder="" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="start" class="control-label">Starting Location</label>
										<div class="controls">
											<input type="text" name="start"  placeholder="Stop Number" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="end" class="control-label">Ending Location</label>
										<div class="controls">
											<input type="text" name="end"  placeholder="Stop Number" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="start-time" class="control-label">Start Time</label>
										<div class="bootstrap-timepicker input-append controls" style="display:block;">
											<input type="text" name="start-time" id="timepicker1" placeholder="" class="input-xlarge">
											<span class="add-on"><i class="icon-time"></i></span>
										</div>
									</div>
									<div class="form-actions">
										<button onclick="send();" type="button" class="btn btn-primary">Save</button>
										<a href="tm-manage-routes.php">
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
		var number=document.forms['main-form']['route-number'].value;
		var start=document.forms['main-form']["start"].value;
		var end=document.forms['main-form']['end'].value;
		var time=document.forms['main-form']['start-time'].value;
		if(isNaN(number)||number===''||isNaN(start)||start===''||isNaN(end)||end==='') {
			alert("Enter details properly");

			return;
		}
		$('button').attr('disabled',true);
		$.post("add_route.php",{

			number:number,
			start:start,
			end:end,
			time:time
		},function(data,status){
			$('button').attr('disabled',false);
			if(status==="success"){
				alert(data);
				if(data==='success')document.forms['main-form'].reset();
			}
		})
	}
</script>

<script type="text/javascript">
	$('#timepicker1').timepicker({minuteStep: 1});
</script>
</html>

<?php
}else{
	header('location:'.$loginurl);
}
?>