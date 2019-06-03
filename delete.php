<?php
$con=mysqli_connect("localhost","root","","churAdmission");
$user_id=$_GET['user_id'];
$delete="DELETE from admin WHERE user_id='$user_id'";
$del=mysqli_query($con,$delete) or die(mysqli_error($delete));
header('location:selectUser.php');
?>