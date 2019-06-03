<?php
include('head_admin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<title>Christian University of Rwanda</title>
					<link rel="stylesheet" href="cssform/styley.css">
</head>
<body width="10" height="100" >
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">
  <div class="panel panel-primary "style="max-width: 1000px; margin: auto;">
    <div class="panel-heading"><strong><div class="btn-group btn-group-justified">
    <a href="Add_faculty.php" class="btn btn-primary">Add faculty</a>
    <a href="Join_new_dept.php" class="btn btn-primary">New program</a>
    <a href="Add_departement.php" class="btn btn-primary">Add department</a>
    <a href="viewfaculty.php" class="btn btn-primary">View faculty</a>
    <a href="select_intake.php" class="btn btn-primary">Intake</a>
    <a href="selectprogram_dept.php" class="btn btn-primary">Setting</a>
  </div></strong></div>
    	<div class="panel-body">
    	<form action="" method="POST" name="students"  onsubmit="return validateform()" >
    		<?php
include('connect.php');
if (isset($_POST['submit'])) {
	

$intake_name=$_POST['intake_name'];
$intake_status=$_POST['intake_status'];
$qr=mysqli_query($conn,"SELECT * FROM intake_table WHERE intake_name='$intake_name'") or die(mysqli_error($conn));
if(mysqli_num_rows($qr)>0){
	$row=mysqli_fetch_assoc($qr);
	echo "<center><p style='color:red;'>This month already registred in system</p></center>";
}else{
$query="INSERT INTO `intake_table` ( `intake_name`, `intake_status`) VALUES ( '$intake_name', '$intake_status');";
$results=mysqli_query($conn,$query)or die(mysqli_error($conn));
header("location:select_intake.php");
}}
?>
            
  <div class="row"  >
						
								<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
							
								<div class=" input-field col-lg-12 col-md-12 col-sm-12">
							   	<div class="form-group">
								<label>Intake month </label>
							
									<select name="intake_name" class="form-control">
									<option></option>	
									<option>January</option>
									<option>February</option>
									<option>March</option>
									<option>April</option>
									<option>May</option>
									<option>June</option>
									<option>July</option>
									<option>August</option>
									<option>September</option>
									<option>October</option>
									<option>November</option>
									<option>December</option>
								</select>
							</div>
						</div>
								<div class=" input-field col-lg-12 col-md-12 col-sm-12">
							   	<div class="form-group">
								<label>Intake status </label>
							
									<select name="intake_status" class="form-control">
									<option></option>
									<option>ON</option>
									<option>OFF</option>
								</select>
							</div>
						</div>
						
						<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<button class="btn btn-default"  name="submit" id="button" >Submit</button>
								<button class="btn btn-default  " name="resete">Cancel</button>
								</div>
					</div>
					</div>

</form>
</div>
</div>
</div>
</body>
</html>

<script>
	function validateform(){
		
			var intake_name=document.students.intake_name.value;
			var intake_status=document.students.intake_status.value;
			if (intake_name=="") {
				alert("choose month");
				return false;
			}
			if (intake_status=="") {
				alert("choose ON or OFF");
				return false;
			}
		}
			</script>