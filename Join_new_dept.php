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
<body width="10" height="100" ><br><br>
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">
  <div class="panel panel-primary "style="max-width: 1000px; margin: auto;">
         
     <div class="panel-heading"><strong><div class="btn-group btn-group-justified">
    <a href="Add_faculty.php" class="btn btn-primary">Add faculty</a>
    <a href="Join_new_dept.php" class="btn btn-primary">New program</a>
    <a href="Add_departement.php" class="btn btn-primary">Add department</a>
    <a href="viewfaculty.php" class="btn btn-primary">View faculty</a>
    <a href="viewdept.php" class="btn btn-primary">Departement</a>
    <a href="select_intake.php" class="btn btn-primary">Intake</a>
    <a href="selectprogram_dept.php" class="btn btn-primary">Setting</a>
  </div></strong></div>
    	<div class="panel-body">

        <?php
if(isset($_POST['submit'])){
$dept_id=$_POST['dept_id'];
$level_id2=$_POST['level_id2'];
$program_id2=$_POST['program_id2'];
$conn=mysqli_connect("localhost","root","","churAdmission");
$query= mysqli_query($conn,"SELECT * FROM program_dept where dept_id='$dept_id' AND level_id2='$level_id2' AND program_id2='$program_id2'")or die(mysqli_error($conn));
if (mysqli_num_rows($query)>0) {
  echo "<center><p style='color:red'> This setting Alread done</p></center>";
  $rows = mysqli_fetch_assoc($query);
} 
else{
$qr="INSERT INTO `program_dept` (`dept_id`,`level_id2`, `program_id2`) VALUES ('$dept_id','$level_id2', '$program_id2')"; 
$result=mysqli_query($conn,$qr)or die(mysqli_error($conn));
header('location:./selectprogram_dept.php');
}}
?>

    		<form class="form-horizontal" method="POST" name="students" onsubmit="return validateform()">
    			<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
    				<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Departement name</label>
								<select name="dept_id" class="form-control">
									<option></option>
									<?php
                					include('connect.php');
                					
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
                <label>Level name</label>
                <select name="level_id2" class="form-control">
                  <option></option>
                  <?php
                          include('connect.php');
                          
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
              <div class=" input-field col-lg-12 col-md-12 col-sm-12" >
                <label>program name</label>
                <select name="program_id2" class="form-control">
                  <option></option>
                  <?php
                          include('connect.php');
                          
                            $query = "SELECT * FROM program";
                            $results=mysqli_query($conn, $query);
                            //loop
                           foreach ($results as $fac){
                                 //$program_id=$dept['program_id'];
                              ?>
                                <option value="<?php echo $fac["program_id"];?>"><?php echo $fac["program_name"];?></option>

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
      var level_id2=document.students.level_id2.value;
      var program_id2=document.students.program_id2.value;
      if (dept_id=="") {
        alert("Please add departement name");
        return false;
      }
      if (dept_id=="Select departement") {
        alert("Please add departement name");
        return false;
      }
      if (level_id2=="") {
        alert("Please add level name");
        return false;
      }
      if (level_id2=="Select level") {
        alert("Please add level name");
        return false;
      }
      if (program_id2=="") {
        alert("Please add departement name");
      return false;
      }
      if (program_id2=="Select program") {
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