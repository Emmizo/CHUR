<?php
//$con=mysqli_connect("localhost","root","","churAdmission");
include('connect.php');
$id=$_GET['id'];
$delete="DELETE from program_dept WHERE id='$id'";
$del=mysqli_query($conn,$delete) or die(mysqli_error($delete));
header('location:selectprogram_dept.php');
?>