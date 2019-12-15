<?php
include('head_admin.php');
include('connect.php');
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
<body width="10" height="100" ><br><br>
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
  </div></strong></div></br>
    	<div class="panel-body">

        <?php
if(isset($_POST['submit'])){
$dept_id=$_POST['dept_id'];
$level_id2=$_POST['level_id'];
$query2= mysqli_query($conn,"SELECT * FROM level_dept where dept_id='$dept_id' AND level_id2='$level_id2'")or die(mysqli_error($conn));

if (mysqli_num_rows($query2)>0) {
  echo "<center><p style='color:red'> This level and Department already registered</p></center>";
  $rows = mysqli_fetch_assoc($query2);
} 
else{
$qr="INSERT INTO `level_dept` (`dept_id`,`level_id` ) VALUES ('$dept_id','$level_id2')"; 
 $result=mysqli_query($conn,$qr)or die(mysqli_error($conn));
header('location:./select_level_dept.php');
}}
?>

    		<form class="form-horizontal" method="POST" name="students" onsubmit="return validateform()">
    			<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
    				<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Departement name</label>
								<select name="dept_id" class="form-control">
									<option></option>
									<?php
                				//	include('connect.php');
                					
                    				$query = "SELECT * FROM departement";
                    				$results=mysqli_query($conn, $query);
                    				//loop
                   				 foreach ($results as $fac){
                   				 			 //$program_id=$dept['program_id'];
                   				 		?>
                   				 			<option value="<?php echo $fac["dept_id"];?>"><?php echo $fac["dept_name"];?></option>

									<?php
												}
                					?>
								</select>
							</div>
              <div class=" input-field col-lg-12 col-md-12 col-sm-12" >
                <label>level name</label>
                <select name="level_id2" class="form-control">
                  <option></option>
                  <?php
                          //include('connect.php');
                          
                            $query = "SELECT * FROM level";
                            $results=mysqli_query($conn, $query);
                            //loop
                           foreach ($results as $fac){
                                 //$program_id=$dept['program_id'];
                              ?>
                                <option value="<?php echo $fac["level_id"];?>"><?php echo $fac["level_name"];?></option>

                  <?php
                        }
                          ?>
                </select>
              </div>
              <div class="input-field col-lg-12 col-md-12 col-sm-12">
                <br>
                <button  class="btn btn-default"  name="submit" id="button">Submit</button>
            </div>
						</div>
    		</form>
    	</div>
    </div>
</div>
</div>
</div>
</body>
</html>
<script>
  function validateform(){
    var dept_id=document.students.dept_id.value;
      var level_id=document.students.level_id.value;
      
      if (dept_id=="") {
        alert("Please add departement name");
        return false;
      }
      if (dept_id=="Select departement") {
        alert("Please add departement name");
        return false;
      }
      if (level_id=="") {
        alert("Please add level name");
        return false;
      }
    }
</script>
<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>