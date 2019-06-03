<?php
include('head_admin.php');
?>
<?php
if(isset($_POST['submit'])){
$faculty_id=$_POST['faculty_id'];
$faculity_name=$_POST['faculity_name'];
$conn=mysqli_connect("localhost","root","","churAdmission");
$query= mysqli_query($conn,"SELECT * FROM faculity where faculty_id='$faculty_id' or faculity_name='$faculity_name'")or die(mysqli_error($conn));
if (mysqli_num_rows($query)>0) {
  echo "<p style='color:red'> This ".$faculty_id." or ".$faculity_name." Alread in</p>";
  $rows = mysqli_fetch_assoc($query);
} else{

$qr="INSERT INTO `faculity` (`faculty_id`, `faculity_name`) VALUES ('$faculty_id', '$faculity_name')"; 
$result=mysqli_query($conn,$qr)or die(mysqli_error($conn));
header('location:./selectprogram_dept.php');
}}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<title>Christian University of Rwanda</title>
					<link rel="stylesheet" href="cssform/styley.css">
</head>
<body width="10" height="100"><br><br>
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">
  <div class="panel panel-primary "style="max-width: 1020px; margin: auto;">      
     <div class="panel-heading"><strong><div class="btn-group btn-group-justified">
    <a href="Add_faculty.php" class="btn btn-primary">Add faculty</a>
    <a href="Join_new_dept.php" class="btn btn-primary">New program</a>
    <a href="Add_departement.php" class="btn btn-primary">Add department</a>
    <a href="viewfaculty.php" class="btn btn-primary">View faculty</a>
    <a href="select_intake.php" class="btn btn-primary">Intake</a>
    <a href="selectprogram_dept.php" class="btn btn-primary">Setting</a>
  </div></strong></div>
    	<div class="panel-body">
    	<form action="" name="students" onsubmit="return validateform()"  method="POST">
    		<div class="row"  >
						<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Faculty ID</label>
								<input type="text" class="form-control" name="faculty_id"  > 
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Faculty name</label>
								<input type="text" class="form-control" name="faculity_name" > 
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<br>
								<button class="btn btn-default"  name="submit" id="button">Submit</button>
						</div>
					</div>
				</form>
    		</div>
		</div>
	</div>
	</div>
</div>				
    	

<script>
	function validateform(){
			var faculty_id=document.students.faculty_id.value;
			var faculity_name=document.students.faculity_name.value;
			if (faculty_id=="") {
				alert("Please add Faculty Identity");
				return false;
			}
			if (faculity_name=="") {
				alert("Please add faculty name");
				return false;
			}
			
		}
</script>
<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>
</body>
</html>