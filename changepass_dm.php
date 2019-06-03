<html>
<?php
include('head_admin.php');
?>
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
					<link rel="stylesheet" href="../css/bootstrap.min.css">
					<title>Christian University of Rwanda </title>
					<link rel="stylesheet" href="cssform/style.css">

				</head>
				<br><br>
				<body>
					<div class="panel panel-default">
	<div class="panel-heading">
  <div class="panel panel-primary">
    <div class="panel-heading"><strong style="text-align: center;"><p> Change your password</p></div></strong>
	<div class="panel-body">
					<div class="se-pre-con"></div>
					<form class="form-horizontal" role="form" action="" method="POST">

						<div class="row">
							<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12">
								<div class=" input-field col-lg-12 col-md-12 col-sm-12">
									<label>Username</label>
									<input class="form-control"  type="text" name="user_username" placeholder="" >
								</div>
								<div class=" input-field col-lg-12 col-md-12 col-sm-12">
									<label>Email</label>
									<input class="form-control"  type="email" name="user_email" placeholder="" >
								</div>
								<div class="input-field col-lg-12 col-md-12 col-sm-12">
									<label>New password</label>
									<input class="form-control" type="password" name="npass" >
								</div>
								<div class="input-field col-lg-12 col-md-12 col-sm-12">
									<label>Confirm New Password</label>
									<input class="form-control" type="password" name="cpass">
								</div>
									<div class="input-field col-lg-12 col-md-12 col-sm-12">
										<button class="btn btn-default " id="button" name="submit">CHANGE</button>
										<button class="btn btn-default " name="reset">CANCEL</button>
									</div>

								</div>
							</div>
						</form></div>
					</div>
				</div>
			</div>
		</div>
						
			</div>

					
				</div>
			</div>
		</div>
	</div>
</body>

</html>



<?php
include_once("connect.php");

if(isset($_POST['submit'])){

$user=$_POST['user_username'];
$user=md5($user);
$email=$_POST['user_email'];
$new_pass=md5($_POST['npass']);
$re_password=md5($_POST['cpass']);

$sql=mysqli_query($conn,"SELECT * FROM admin WHERE user_username='$user' && user_email='$email' ");
if(mysqli_num_rows($sql)>0){

if($new_pass===$re_password){

$sq=mysqli_query($conn,"UPDATE admin SET user_password='$new_pass'  WHERE user_username='$user' && user_email='$email'");

echo "<script>alert('your password changed')</script>";
echo "<script>window.location.assign('login.php')</script>";
}else{
echo "<script>alert('your password not match')</script>";	
}

}else{

echo "<script>alert('invalid username or email')</script>";

}


}

?>