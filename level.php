<?php
include('connect.php');
if (!empty($_POST["dept_id"])) {
 $dept_id = $_POST["dept_id"]; 
 
$query="SELECT  level_dept.dept_id, level_dept.level_id,level.level_id, level.level_name FROM level
join level_dept ON level_dept.level_id=level.level_id
JOIN  departement ON departement.dept_id=level_dept.dept_id
 WHERE level_dept.dept_id = '$dept_id'";

 $results = mysqli_query($conn, $query)or die(mysqli_error($conn));
 ?> 
<option selected="selected">select level</option><?php
if($count=mysqli_num_rows($results)>0){
while($program=mysqli_fetch_assoc($results)){
 ?>
 
  <option data='<?php echo $program["dept_id"];?>' value="<?php echo $program["level_id"];?>"><?php echo $program["level_name"];?></option>       
			<?php
      	  }}else{
				?>
				<?php?>
				<option data='<?php echo $program["dept_id"];?>' value="<?php echo $program["level_id"];?>"><?php echo "There is no level available";?></option>
					<?php
			}
      	  
		  }
		  
      	   	?>