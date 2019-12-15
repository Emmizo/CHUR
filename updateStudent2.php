
<?php
include('header_user.php');
ob_start();
?>
<?php
include('connect.php');
$ID=$_GET['ID'];
	$query="SELECT DISTINCT registration.idreg, students.reg_id,faculity.faculity_name,registration.intake,program.program_id, students.ID, students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_id,level.level_id from students
		
		INNER JOIN program
         INNER JOIN registration ON students.ID=registration.ID
         INNER JOIN departement ON registration.dept_id=departement.dept_id  
         INNER JOIN faculity ON faculity.faculty_id=departement.faculity_id
         INNER JOIN program_dept
         INNER JOIN level ON registration.level_id=level.level_id WHERE registration.idreg='$ID' ";
	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	while ($rows=mysqli_fetch_assoc($result)) {
		$ID=$rows['ID'];
		$f_name=$rows['f_name'];
		$l_name=$rows['l_name'];
		$sex=$rows['sex'];
		$tel=$rows['tel'];
		$email=$rows['email'];
		$reg_no=$rows['reg_id'];
		$ID=$rows['ID'];
		$dept=$rows['dept_id'];
		$program=$rows['program_id'];
		$level=$rows['level_id'];
		$intake=$rows['intake'];
		}
	?>
<?php
if (isset($_POST['update'])) {
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$sex=$_POST['sex'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$reg_id=$_POST['reg_id'];
	$ID=$_POST['ID'];
	$dept=$_POST['dept_id'];
	$program=$_POST['program_id'];
	$level=$_POST['level_id'];
	$intake=$_POST['intake'];
  $query2="UPDATE students
  INNER JOIN program_dept 
         INNER JOIN registration  ON students.ID=registration.ID
         INNER JOIN departement ON registration.dept_id=departement.dept_id 
          
          INNER JOIN faculity ON faculity.faculty_id=departement.faculity_id
          INNER JOIN program ON program.program_id=registration.program_id
         INNER JOIN level ON level.level_id=registration.level_id SET students.f_name='$f_name',students.l_name='$l_name',students.sex='$sex',students.tel='$tel',students.email='$email',students.reg_id='$reg_id',students.ID='$ID',registration.ID='$ID',registration.dept_id='$dept',registration.program_id='$program',registration.level_id='$level',registration.intake='$intake' WHERE registration.idreg='$ID'";
  $result=mysqli_query($conn,$query2)or die(mysqli_error($conn));
  header("location:./selectStudent2.php");
  }
  ?>
<html>
<head>
	<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-body">
					<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<title>CHUR</title>					
					<link rel="stylesheet" href="cssform/style.css">	
					<style type="text/css">
						.error{
							color: red;
							
							font-style: italic;
							font-size: 12px;
						}
					</style>
				</head>
				<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
  					<div class="panel panel-primary">
					<div class="panel-heading"><center><strong>Students update form</center></div></strong>
    				<div class="panel-body">
    					<form class="form-horizontal" role="form" action="" name="students" onsubmit="return validateform()" method="POST">
    						<div class="se-pre-con"></div>
					<div class="row"  >
						<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" ">

							
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Firstname:</label>
								<input type="text" class="form-control" name="f_name" value="<?php echo $f_name;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Lastname:</label>
								<input class="form-control" type="text" name="l_name" value="<?php echo $l_name;?>">
							</div>
							<!--form Here are hidden inputbox for data will go in database automatically-->
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								
								<input type="hidden" class="form-control" name="date" value="<?php echo date('Y-m-d')?>">
							</div>
							
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Reg Number:</label>
								<input class="form-control" type="text" name="reg_id" value="<?php echo $reg_no;?>" readonly>
							</div>
							<!--until here
							<div class="radio-field col-lg-12 col-md-12 col-sm-12">
								<label>Male</label>
								<input class="form-control" type="radio" name="sex" value="Male" >
								<label>Female</label>
								<input class="form-control" type="radio" name="sex" value="Female" >
							</div>-->
							<div class="input-radio col-lg-12 col-md-12 col-sm-12">
								<label>Sex:</label>
								<input class="form-control" type="text" name="sex" value="<?php echo $sex;?>" >
							</div>
							<div class="input-radio col-lg-12 col-md-12 col-sm-12">
								<label>Telephone:</label>
								<input class="form-control" type="text" name="tel" value="<?php echo $tel;?>" >
							</div>

							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Email:</label>
								<input class="form-control" type="text" name="email" value="<?php echo $email;?>">
							</div>

							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>National ID:</label>
								<input class="form-control" type="text" name="ID" value="<?php echo $ID;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Department:</label>
								<input class="form-control" type="text" name="dept_id" value="<?php echo $dept;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Program:</label>
								<input class="form-control" type="text" name="program_id" value="<?php echo $program;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Level:</label>
								<input class="form-control" type="text" name="level_id" value="<?php echo $level;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>INTAKE:</label>
								<input class="form-control" type="text" name="intake" value="<?php echo $intake;?>">
							</div>

							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<br>
								<!--<button class="btn btn-warning float-right " name="resete">CANCEL</button>-->
								<button class="btn btn-default" name="update" id="button">Update</button>
							</div>
						</div>
					</div>
				</div></div></div></div></div></div></div>
				</div>
			</form>
		</div>
	</div>
</div>
<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>
</body>
</html>