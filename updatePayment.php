
<?php
include('head_admin.php');
include('connect.php');
?>
<?php
$fees_id=$_GET['fees_id'];
$qr="SELECT * from fees WHERE fees_id='$fees_id'";
$result=mysqli_query($conn,$qr)or die(mysqli_error($conn));
while ($rows=mysqli_fetch_assoc($result)) {
	$reg_fees=$rows['reg_fees'];
	$student_ID_card=$rows['student_ID_card'];
	$chursu=$rows['chursu'];
	$insurance=$rows['insurance'];
	$library_card=$rows['library_card'];
	$caution_fees=$rows['caution_fees'];
	$tuition_fees=$rows['tuition_fees'];
}
?>
<?php
if (isset($_POST['update'])) {
	$reg_fees=$_POST['reg_fees'];
	$student_ID_card=$_POST['student_ID_card'];
	$chursu=$_POST['chursu'];
	$insurance=$_POST['insurance'];
	$library_card=$_POST['library_card'];
	$caution_fees=$_POST['caution_fees'];
	$tuition_fees=$_POST['tuition_fees'];
	$query2="UPDATE fees SET reg_fees='$reg_fees',student_ID_card='$student_ID_card',chursu='$chursu',insurance='$insurance',library_card='$library_card',caution_fees='$caution_fees',tuition_fees='$tuition_fees'";
	$result=mysqli_query($conn,$query2)or die(mysqli_error($conn));
 header("location:./payment.php");
	//echo "<center>Thank you update goes well</center>";
}
?>
<!DOCTYPE html>
<html>
<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
  //paste this code under head tag or in a seperate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
	</head>
<body>
<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-body">
					   <div class="se-pre-con"></div>  
					<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<title>Christian University of Rwanda</title>
					<link rel="stylesheet" href="cssform/styley.css">
					<div class="panel panel-primary">
					 <div class="panel-heading"><center><strong>update payment</strong></center></div>
    				<div class="panel-body">
    					<form class="form-horizontal" method="POST" name="students" onsubmit="return validateform()">
    						<div class="row"  >
						<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >

							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Registration fees:</label>
								<input type="text" class="form-control" name="reg_fees" value="<?php echo $reg_fees;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Student ID Card:</label>
								<input class="form-control" type="text" name="student_ID_card" value="<?php echo $student_ID_card;?>">
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>CHURSU contribution:</label>
								<input type="text" class="form-control" name="chursu" value="<?php echo $chursu;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Insturance against accident:</label>
								<input class="form-control" type="text" name="insurance" value="<?php echo $insurance;?>" >
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Student Library Card:</label>
								<input type="text" class="form-control" name="library_card" value="<?php echo $library_card;?>" >
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Caution Money:</label>
								<input class="form-control" type="text" name="caution_fees" value="<?php echo $caution_fees;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Tuition fees:</label>
								<input class="form-control" type="text" name="tuition_fees" value="<?php echo $tuition_fees;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<br>
								<button class="btn btn-default" name="update" id="button">Update</button>
							</div>
    					</form>
    				</div>
    				</div>	
                </div>
            </div>
        </div>
        </div>
        
        </html>						