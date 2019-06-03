<?php
$con=mysqli_connect("localhost","root","","churAdmission");
$id=$_GET['id'];
$delete="DELETE from program_dept WHERE id='$id'";
$del=mysqli_query($con,$delete) or die(mysqli_error($delete));
header('location:selectprogram_dept.php');
?>