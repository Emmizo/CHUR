<?php
include('head_admin.php');
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
 <link rel ="stylesheet" href="css/responsive.css">
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
  </div></strong></div></br>
  <div class="se-pre-con"></div>
    	<div class="panel-body"> 
    	<form action="selectprogram_dept.php" method="GET" >
    		<table class="table table-hover" style="text-align: left;">
    			<tr>
    				<th>Level</th>
    				<th>Departement</th>
    				<th>Option</th>
    			</tr>
    		<?php
    		$qr="SELECT level_dept.id,level_dept.dept_id, level.level_name,departement.dept_name from level_dept 
    		INNER JOIN level ON level.level_id=level_dept.level_id
    		INNER JOIN departement ON departement.dept_id=level_dept.dept_id ORDER BY dept_id ASC, level_dept.level_id ASC";
    		$results=mysqli_query($conn,$qr)or die(mysqli_error($conn));
    		while ($rows=mysqli_fetch_assoc($results)) {
    		?>

    			<tr>
    				<td><?=strtoupper($rows['level_name']);?></td>
    				<td><?=strtoupper($rows['dept_name']);?></td>
    				<td><?php echo "<a href=\"deleteSetting.php?id=$rows[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" style='text-decoration:none;'><i class='glyphicon glyphicon-trash'></i></a></td>"?></a><i></i></td>
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
</body>
</html>
<footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>