<?php
Include('head_admin.php');
include('connect.php');
$intake_id=$_GET['intake_id'];

	$query=mysqli_query($conn,"SELECT * FROM intake_table  WHERE intake_id='$intake_id'");
	while ($rows=mysqli_fetch_assoc($query)) {
		$intake_id=$rows['intake_id'];
		$intake_status=$rows['intake_status'];
	}

if (isset($_POST['update'])) {

$intake_status=$_POST['intake_status'];
$query="UPDATE intake_table SET intake_status='$intake_status' WHERE intake_id='$intake_id'" ;
 $result=mysqli_query($conn,$query)or die(mysqli_error($conn));
header("location:select_intake.php");

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="panel-body" >
	<div class="container">
		<div class="panel panel-primary "style="max-width: 1020px; margin: auto;">
   <div class="panel-heading"><strong>
   	<div class="btn-group btn-group-justified"style="position: fixed;max-width: 988px; margin: auto;">
    <a href="Add_faculty.php" class="btn btn-primary">Add faculty</a>
    <a href="Join_new_dept.php" class="btn btn-primary">New program</a>
    <a href="Add_departement.php" class="btn btn-primary">Add department</a>
    <a href="viewfaculty.php" class="btn btn-primary">View faculty</a>
    <a href="viewdept.php" class="btn btn-primary">Departement</a>
    <a href="select_intake.php" class="btn btn-primary">Intake</a>
    <a href="selectprogram_dept.php" class="btn btn-primary">Setting</a>
  </div></strong></div>
    <div class="panel-body">
    	<form class="form-horizontal" role="form" action="" name="students" method="POST">
					<div class="row"  >
						
								<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
								<div class=" input-field col-lg-12 col-md-12 col-sm-12">
							   	<div class="form-group">
								
							
									<select name="intake_status" class="form-control">
									<option></option>
									<option>ON</option>
									<option>OFF</option>
								</select>
							</div>
						</div>
								<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<button class="btn btn-default" <?php echo  "onClick=\"return confirm('Are you sure, you want to change status?')\"";?> name="update" id="button" >submit</button>
							</div>
						</div>
					</div>
				</center>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>