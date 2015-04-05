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
						<h1>Employee Details</h1>
					</div>

					<?php printModuleButton(); ?>
				</div>

			<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Vehicle Details
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin table-bordered">
									<thead>
										<tr>
											<th>ID</th>
											<th>Role</th>
											<th class='hidden-350'>Name</th>
											<th class="hidden-480">License</th>
											<th class='hidden-1024'>Expiry</th>
											<th class="hidden-1024">Status</th>
											<th class="hidden-1024">Verification</th>
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
								        	$sql="select * from employee WHERE institute_id={$institutionId}";

								        	$result=mysqli_query($dbconnection,$sql);

								        	while($row=mysqli_fetch_array($result))
											{
												echo '<tr><td>'.$row['id'].'</td><td>'.$row['role'].'</td><td class="hidden-350">'.$row['name'].'</td><td class="hidden-480">'.$row['license_number'].'</td><td class="hidden-1024">'.$row['expiry'].'</td><td class="hidden-1024">'.$row['employee_status'].'</td><td class="hidden-1024">'.$row['verification'].'</td></tr>';
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
</html>

<?php
}else{
    header('location:'.$loginurl);
}
?>