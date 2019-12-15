<?php
include('head_admin.php');
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<title>Christian University of Rwanda</title>
					<link rel="stylesheet" href="cssform/styley.css">
</head>
<body width="10" height="100" align="center">
<div class="container">
	<div class="panel panel-default">
  <div class="panel panel-primary" style="max-width: 100%; margin: auto;">
    <div class="panel-heading"><strong><div class="btn-group btn-group-justified" style="position: fixed;max-width: 80%; margin: auto;" >
    <a href="Add_faculty.php" class="btn btn-primary">Add faculty</a>
    <a href="Add_departement.php" class="btn btn-primary">Add department</a>
    <a href="viewfaculty.php" class="btn btn-primary">View faculty</a>
    <a href="select_intake.php" class="btn btn-primary">Intake</a>
	<a href="selectprogram_dept.php" class="btn btn-primary">Setting Session</a>
	<a href="select_level_dept.php" class="btn btn-primary">Setting Level</a>
  </div></strong></div><br>
    	<div class="panel-body">
    	<form action="selectprogram_dept.php" method="GET" >
    		<table class="table table-hover" style="text-align: left;" >
    			
    			<tr>
    				<th>Departement ID</th>
                    <th>Faculty ID</th>
    				<th>Departement name</th>
    				
    				
    			</tr>
    		<?php
    		
    		//$conn=mysqli_connect("localhost","root","","churAdmission");
    		$faculity_id=$_GET['faculity_id'];
    		$qr="SELECT * from departement WHERE faculity_id='$faculity_id'";
    		$results=mysqli_query($conn,$qr)or die(mysqli_error($conn));
    		while ($rows=mysqli_fetch_assoc($results)) {
    		?>

    			<tr>
    				<td><?=$rows['dept_id'];?></td>
                    <td><?=$rows['faculity_id'];?></td>
    				<td><?=$rows['dept_name'];?></td>
    			</tr>	

    		
<?php
}
?>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>