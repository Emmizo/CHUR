<?php
include('head_admin.php');
include('connect.php');
$user_id=$_GET['user_id'];
$qr="SELECT * FROM admin where user_id='$user_id'";
$result=mysqli_query($conn,$qr)or die(mysqli_error($conn));
while($rows=mysqli_fetch_assoc($result)){
	$fullname=$rows['fullname'];
	$username=$rows['user_username'];
	$password=$rows['user_password'];
	$user_email=$rows['user_email'];
	$user_level=$rows['user_level'];
?>
<?php
if (isset($_POST['update'])) {
	$fullname=$_POST['fullname'];
	$user_username=md5($_POST['user_username']);
	$user_password=md5($_POST['user_password']);
	$user_email=$_POST['user_email'];
	$user_level=$_POST['user_level'];
	
	$sqr="UPDATE `admin` SET `fullname` = '$fullname ', `user_email` = '$user_email', `user_level` = '$user_level' WHERE `admin`.`user_id` = '$user_id';";
	$result=mysqli_query($conn,$sqr)or die(mysqli_error($conn));
  header("location:./selectUser.php");
}
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
</head>
<body>
<body>
<form class="form-horizontal" role="form" action="" name="user" onsubmit="return validateform()" method="POST">
				<div class="se-pre-con"></div>
  					<div class="panel panel-primary">
					 <div class="panel-heading"><center><strong>UPDATE USER</strong></center></div>
    				<div class="panel-body">
					<div class="row"  >
						<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >

							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Full name:</label>
								<input type="text" class="form-control" name="fullname" value="<?php echo $fullname;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>USERNAME:</label>
								<input class="form-control" type="text" name="user_username" value="<?php echo $username;?>">
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>PASSWORD:</label>
								<input type="text" class="form-control" name="user_password" value="<?php echo $password;?>">
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>Email:</label>
								<input type="text" class="form-control" name="user_email" value="<?php echo $user_email;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>USER LEVEL:</label>
								<input class="form-control" type="text" name="user_level" value="<?php echo $user_level;?>">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<br>
								<button class="btn btn-default" name="update" id="button">UPDATE</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<?php
	}
	
		?>
	</body>
</html>
<footer class="footer">
<?php
include('footer.php');
?>
</footer>