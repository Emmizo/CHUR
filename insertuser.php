
<?php
include('head_admin.php');
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Christian university of Rwanda</title>
	<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
<script type="text/javascript">
function noNumbers(e)
{
var keynum
var keychar
var numcheck
if(window.event) // IE
{
keynum = e.keyCode
}
else if(e.which) // Netscape/Firefox/Opera
{
keynum = e.which
}
keychar = String.fromCharCode(keynum)
numcheck = /\d/
return !numcheck.test(keychar)
}
</script>		
</head>
<body><br><br><br><br>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel panel-primary">
	<div class="panel-heading"><center><strong>USER FORM</strong></center></div>
   	<div class="panel-body">
   		<div class="se-pre-con"></div>
    					<?php

if (isset($_POST['submit'])) {
	
	if (strlen(trim($_POST['fullname']))<=2) {
		$error['fullname']=true;
	}
	if (strlen(trim($_POST['user_username']))<=2) {
		$error['user_username']=true;
	}
	
    if (strlen($_POST['user_password'])<8) {
		$error['user_password']=true;
	}
	if ($_POST['confirm']!=$_POST['user_password']) {
		$error['confirm'] =true;
	}
	
	if (!filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)) {
		$error['user_email']=true;
	}
	if (strlen(trim($_POST['user_level']))<=2) {
		$error['user_level']=true;
	}
	if (empty($error)) {
		
		$fullname=trim($_POST['fullname']);
		$user_username=md5($_POST['user_username']);
		$user_password=md5($_POST['user_password']);
		$user_email=trim($_POST['user_email']);
		$user_level=trim($_POST['user_level']);
		
		//$dob=$_POST['month'] . "-" . $_POST['day'] . "-" . $_POST['year'];
	$con=mysqli_connect("localhost","root","","churadmission");
	if (!$con) {
		echo "Unable to connect to database";
	}
	$sql="INSERT INTO `admin` (`user_id`, `fullname`, `user_username`, `user_password`, `user_email`, `user_level`) VALUES (NULL, '$fullname', '$user_username', '$user_password', '$user_email', '$user_level');";
$query = mysqli_query($conn, $sql)or die(mysqli_error($conn));
if ($query==true) {
	echo('<center><div class="alert alert-success">
    <strong>Success!</strong> Thank you new user add  successful action.
  </div></center>');
}
	       	  } 
 }

	
	$data['fullname'] = isset($_POST['fullname']) ? trim($_POST['fullname']) : "";
	$data['user_username'] = isset($_POST['user_username']) ? trim($_POST['user_username']) : "";
	$data['user_password'] = isset($_POST['user_password']) ? trim($_POST['user_password']) : "";
	
	$data['user_level'] = isset($_POST['user_level']) ? trim($_POST['user_level']) : "";
	$data['user_email'] = isset($_POST['user_email']) ? trim($_POST['user_email']) : "";
?>					<form class="form-horizontal" role="form" action="" name="user" onsubmit="return validateform()" method="POST">
					<div class="row"  >
						<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >

							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Full name</label>
								<input type="text" class="form-control" name="fullname" value="<?=$data['fullname'];?>" onkeypress="return noNumbers(event)">
								<div style="color: red;"><?=isset($error['fullname'])?"Invalid fullname":"";?></div>
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>USERNAME</label>
								<input class="form-control" type="text" name="user_username" value="<?=$data['user_username'];?>" onkeypress="return noNumbers(event)" >
								<div style="color: red;"><?=isset($error['user_username'])?"Invalid username":"";?></div>
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>PASSWORD</label>
								<input type="password" class="form-control" name="user_password" value="<?=$data['user_password'];?>" >
								<div style="color: red;"><?=isset($error['user_password'])?"You must use at least 8 character":"";?></div>
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>Confirm</label>
								<input type="password" class="form-control" name="confirm" >
								<div style="color: red;"><?=isset($error['confirm'])?"Password doesn't match":"";?></div>
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>Email</label>
								<input type="text" class="form-control" name="user_email" value="<?=$data['user_email'];?>" >
								<div style="color: red;"><?=isset($error['user_email'])?"invalid email":"";?></div>
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>USER LEVEL</label>
								<select name="user_level" class="form-control">
									<option></option>
									<option>Kigali</option>
									<option>Karongi</option>
									<div style="color: red;"><?=isset($error['user_level'])?"invalid level must be ADMIN or USER":"";?></div>
								</select>
							</div>

							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<br>
								<button  class="btn btn-default" name="submit" id="button">Submit</button>
							</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
		</form>
		<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>
	</body>
</html>