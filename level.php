<?php
include('connect.php');
if (!empty($_POST["dept_id"])) {
 $dept_id = $_POST["dept_id"]; 
$query="SELECT DISTINCT departement.dept_id, program_dept.dept_id, program_dept.level_id2,level.level_id, level.level_name FROM program_dept
JOIN  departement USING(dept_id) 
join level 
 WHERE departement.dept_id = '$dept_id' AND level.level_id=program_dept.level_id2";

 $results = mysqli_query($conn, $query)or die(mysqli_error($conn));
 ?> <option selected="selected">select level</option><?php
while ($program=mysqli_fetch_assoc($results)){
 ?>
 <option value="<?php echo $program["level_id2"];?>"><?php echo $program["level_name"];?>
    		</option>       
			<?php
      	  }
      	  
      	}
      	   	?>