<?php
include('head_admin.php');
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
  <div class="panel panel-primary" style="max-width: 100%; margin: auto;">
    <div class="panel-heading"><strong><div class="btn-group btn-group-justified" style="position: fixed;max-width: 80%; margin: auto;" >
    <a href="Add_faculty.php" class="btn btn-primary">Add faculty</a>
    <a href="Add_departement.php" class="btn btn-primary">Add department</a>
    <a href="viewfaculty.php" class="btn btn-primary">View faculty</a>
    <a href="select_intake.php" class="btn btn-primary">Intake</a>
	<a href="selectprogram_dept.php" class="btn btn-primary">Setting Session</a>
	<a href="select_level_dept.php" class="btn btn-primary">Setting Level</a>
  </div></strong></div><br>
    	<div class="panel-body">
    	<form action="" method="POST" name="students" onsubmit="return validateform()">
    		<div class="row"  >
						<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Department ID</label>
								<input type="text" class="form-control" name="dept_id" > 
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Faculty name</label>
								<select name="faculity_id" class="form-control">
									<option></option>
									<?php
                					include('connect.php');
                					
                    				$query = "SELECT * FROM faculity";
                    				$results=mysqli_query($conn, $query);
                    				//loop
                   				 foreach ($results as $fac){
                   				 			 //$program_id=$dept['program_id'];
                   				 		?>
                   				 			<option value="<?php echo $fac["faculty_id"];?>"><?php echo $fac["faculity_name"];?></option>

									<?php
												}
                					?>
								</select>
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Department name</label>
								<input type="text" class="form-control" name="dept_name" > 
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<br>
								<button class="btn btn-default"  name="save" id="button">Submit</button>
						</div>
					</div>
								
    	</form>
    </div>
    <?php
if(isset($_POST['save'])){
$dept_id=$_POST['dept_id'];
$faculty_id=$_POST['faculity_id'];
$dept_name=$_POST['dept_name'];
$conn=mysqli_connect("localhost","root","","churAdmission");
$query= mysqli_query($conn,"SELECT * FROM departement where dept_id='$dept_id' or dept_name='$dept_name'")or die(mysqli_error($conn));
if (mysqli_num_rows($query)>0) {
  echo "<center><p style='color:red'> This ".$dept_id." or ".$dept_name." Alread taken</p></center>";
  $rows = mysqli_fetch_assoc($query);
} else{
$qr="INSERT INTO `departement` (`dept_id`,`faculity_id`, `dept_name`) VALUES ('$dept_id','$faculty_id', '$dept_name')"; 
$result=mysqli_query($conn,$qr)or die(mysqli_error($conn));
header('location:./selectprogram_dept.php');
}}
?>
</div>
</div>
</div>
</div>

</body>
</html>

<script>
	function validateform(){
		var dept_id=document.students.dept_id.value;
			var faculity_id=document.students.faculity_id.value;
			var dept_name=document.students.dept_name.value;
			if (dept_id=="") {
				alert("Please add departement Identity");
				return false;
			}
			if (faculity_id=="") {
				alert("Please add Faculty name");
				return false;
			}
			if (dept_name=="") {
				alert("Please add departement name");
				return false;
			}
			
		}
</script>
<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>