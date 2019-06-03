
<?php
include('connect.php');
if (!empty($_POST["level_id"])) {
 $level_id = $_POST["level_id"]; 
	$query="SELECT DISTINCT program.program_id,  program.program_name FROM program 
  join program_dept
  JOIN departement
   JOIN  level 
 WHERE level.level_id = '$level_id' AND program.program_id=program_dept.program_id2 AND level.level_id=program_dept.level_id2";
//echo $level_id;

 $results = mysqli_query($conn, $query)or die(mysqli_error($conn));
  ?><option selected="selected">select program</option><?php
while ($program=mysqli_fetch_assoc($results)){
 ?>
 <option value="<?php echo $program["program_id"];?>"><?php echo $program["program_name"];?>
    		</option>       
			<?php
      	  }
      	  
      	}
      	   	?>