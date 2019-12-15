
<?php
include('connect.php');
if (!empty($_POST["dept_id"])) {
 $dept_id = $_POST["dept_id"]; 
 $level_id= $_POST['level_id'];
	$query="SELECT program.program_id,  program.program_name FROM program 
  join program_dept ON program_dept.program_id2=program.program_id
  JOIN departement ON program_dept.dept_id=departement.dept_id
  JOIN level ON level.level_id=program_dept.level_id
 WHERE program_dept.dept_id = '$dept_id' AND program_dept.level_id='$level_id'";

 $results = mysqli_query($conn, $query)or die(mysqli_error($conn));
  ?><option selected="selected">select session</option><?php
  if($count=mysqli_num_rows($results)>0){
while ($program=mysqli_fetch_assoc($results)){
 ?>
 <option value="<?php echo $program["program_id"];?>"><?php echo $program["program_name"];?>
    		</option>       
			<?php
      	  }}
      	  else{
			?>
			<?php?>
			<option ><?php echo "There is no session available";?></option>
				<?php
		}
      	}
      	   	?>