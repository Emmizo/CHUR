<?php
//$con=mysqli_connect("localhost","root","","churAdmission");
include('connect.php');
$user_id=$_GET['user_id'];
$delete="DELETE from admin WHERE user_id='$user_id'";
$del=mysqli_query($conn,$delete) or die(mysqli_error($delete));
header('location:selectUser.php');
?>