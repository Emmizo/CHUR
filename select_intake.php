<?php
include('head_admin.php');
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
 
</style>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<title>Christian University of Rwanda</title>
					<link rel="stylesheet" href="cssform/styley.css">
</head>
<body width="10" height="100" align="center">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">
  <div class="panel panel-primary "style="max-width: 1020px; margin: auto;">
   <div class="panel-heading"><strong><div class="btn-group btn-group-justified"style="position: fixed;max-width: 988px; margin: auto;">
    <a href="Add_faculty.php" class="btn btn-primary">Add faculty</a>
    <a href="Join_new_dept.php" class="btn btn-primary">New program</a>
    <a href="Add_departement.php" class="btn btn-primary">Add department</a>
    <a href="viewfaculty.php" class="btn btn-primary">View faculty</a>
    <a href="select_intake.php" class="btn btn-primary">Intake</a>
    <a href="selectprogram_dept.php" class="btn btn-primary">Setting</a>
  </div></strong></div>
    	<div class="panel-body">
    	<form action="" method="GET" >


  <table class="table table-hover" style="text-align: left;">
    <tr>
      <thead>
        <th>Intake name</th><th>status</th>
      </thead>
    </tr>
    <?php
    $con=mysqli_connect("localhost","root","","churAdmission");
    $query=mysqli_query($con,"SELECT * from intake_table") or die(mysqli_error($con));
    while ($rows=mysqli_fetch_assoc($query)) {
      # code...
    
    ?>
    <tr>
      <td><?=$rows['intake_name']?></td>
      <?php
      if ($rows['intake_status']=='ON') {
       
      ?>
      <td><button class="btn btn-default" <?php echo  "onClick=\"return confirm('Are you sure, you want to turn OFF this status?')\"";?> style="background-color: green; color: white;"  >
        <a href="off.php?intake_id=<?=$rows['intake_id'];?>" style="text-decoration: none; color: white;" ><?=$rows['intake_status'];?></a></button></td>
      <?php
      }else{
      ?>
      <td><button class="btn btn-default" <?php echo  "onClick=\"return confirm('Are you sure, you want to turn ON this status?')\"";?> style="background-color: red; color: black;" >
        <a href="on.php?intake_id=<?=$rows['intake_id'];?>" style="text-decoration: none; color: white;" ><?=$rows['intake_status'];?></a></button></td>
      <?php
       }
      ?>
    </tr>
    
    <?php
    }
    ?>
    <tr>
      <td></td><td></td>
    </tr>
  </table>
  <button class="btn btn-default"><a href="add_intake.php" style="text-decoration: none;">ADD INTAKE</a></button>

</form>
</div>
</div>
</div>
</div>
</div>

</body>
<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>