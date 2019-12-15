<?php
include('header.php');
include('connect.php');
?>
<?php
session_start();
$usernameError = '';
$passwordError = '';

$errorMessage = '';
$errorMessage2 = '';

$errors = 0;

if (isset($_POST['login'])) {
	
//$con=mysqli_connect("localhost","root","","churAdmission"); 


$tbl_name="admin"; // Table name 

$username=$_POST['user_username']; // username sent from form 
$password=$_POST['user_password']; // password sent from form 
$password=md5($password);
$username=md5($username);
//$email=$_POST['email'];


// To protect MySQL injection 
$username = stripslashes($username);
$password = stripslashes($password);
//$email=stripcslashes($email);
//$username = mysqli_real_escape_string($con,$tbl_name);
//$password = mysqli_real_escape_string($con,$tbl_name);

//Query

	$username=mysqli_real_escape_string($conn, $_POST['user_username']);

	$password=mysqli_real_escape_string($conn,$_POST['user_password']);
	if(empty($_POST['user_username'])){
		$error = 1;
		$usernameError = 'Enter your username';
	}if(empty($_POST['user_password'])){
		$errors = 1;
		$passwordError = 'Enter your password';
	}
	if($errors == 0){
$sql="SELECT * FROM $tbl_name WHERE user_username='".md5($username)."'  and user_password='".md5($password)."'";
		//$sql="SELECT * FROM $tbl_name WHERE user_username='$username'  and user_password='$password'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
// Mysql_num_row is counting table row
if (mysqli_num_rows($result)>0) {

$rows = mysqli_fetch_assoc($result);
$_SESSION['user_id']=$rows['user_id'];
$_SESSION['user_level']=$rows['user_level'];
//Direct pages with different user levels
if ($rows['user_level'] == 'Kigali') {
	header("location:selectStudent.php"); //User1 
	session_register("user_username");
	session_register("user_password");
	
}
else
if ($rows['user_level'] == 'Karongi') {
	header('location: selectStudent2.php'); //User2 
	session_register("user_username");
	session_register("user_password"); 
	
} 

}
/*else
if ($rows['userlevel'] == '3') {
	header('location: user3.html'); //user 3 
	session_register("username");
	session_register("password"); 

} 
else
if ($rows['userlevel'] == '4') {
	header('location: user4.html'); // user4 
	session_register("username");
	session_register("password"); 
	
} */
else{

			$errorMessage = 'Incorect username or password';
		}
}}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
	<title>Christian University of Rwanda</title>
	<link rel="stylesheet" href="">

	<style type="text/css">

		.error{
			color: red;
		}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<link rel="stylesheet" href="HidShow/bootstrap.min.css">
<script src="HidShow/hideShowPassword.js"></script>
<script src="HidShow/allure.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
</head>
<body><br><br>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
</head>
<body>



<script type="text/javascript">
	$("#password").password('toggle');
</script>


</body>
</html>
<div class="container">
	<div class="panel panel-default"  style=" max-width: 1200px; margin: auto;">
	<div class="panel-heading">
  <div class="panel panel-primary">
    <div class="panel-heading"><strong style="text-align: center; max-width: 600px;"><p> Login</p></strong></div>
	<div class="panel-body">
  <div class="wrapper">
	<form class="form" action="login.php" method="POST">
  	<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
	<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
    <div class="form-group">
			<label>Username:</label>
			<input type="text" name="user_username" class="form-control">
		</div>
    <div class="error"><?php echo $usernameError; ?></div>
</div>
<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
  <div class="form-group">
			<label>Password:</label>
			<input type="password" id="password" name="user_password" class="form-control" data-toggle="password">
		</div>
    <div class="error"><?php echo $passwordError; ?></div>
<div class="error"><?php echo $errorMessage; ?></div>
<div class="error"><?php echo $errorMessage2; ?></div>
</div>
<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
    <div class="checkbox">
      <label><input type="checkbox" name="remember_me" id="remember_me"> Remember me</label>
      <?php
    if(!empty($_POST["remember_me"])) {
	setcookie ("user_username",$_POST["user_username"],time()+ 3600);
	setcookie ("user_password",$_POST["user_password"],time()+ 3600);
	//echo "Cookies Set Successfuly";

} else {
	setcookie("user_username","");
	setcookie("user_password","");
	//echo "Cookies Not Set";
}
      ?>
    </div>
    <button type="submit" class="btn btn-default" name="login">Login</button>
    </form>
<div><a href="changepassword.php" style="text-decoration: none;color: green!important; text-transform:lowercase;">Click Here If You Forget Password</a></div>
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
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2017 16:50:31 GMT -->
</html>
<footer class="footer">
  <?php
 
  include('footer.php');
  ?>
</footer>


