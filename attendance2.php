<?php
include('header_user.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Christian University of Rwanda</title>
	<style type="text/css">
		body{
    font-family: Calibri ;
    font-size: 13px;
  }
	table{
		width: 300px;
		border:4px;
		border-color: black;
	}
	table.u{
		width: 600px;
		font-family: Calibri ;
		font-size: 8.5px;
	}
	@media all{
    .page-break{ display: block; }
  }
  @media print{
    .page-break{ display: block; page-break-before: always; }
    p.print {
    page-break-before: always;
  }
  p.print {
    page-break-after: avoid;
  }
  pre, blockquote ,p.print {
    page-break-inside: avoid;
  }}
	@media print{
  @page {
    size: auto;   /* auto is the initial value */
    size: A4 portrait;
    margin: 0;  /* this affects the margin in the printer settings */
    border: 1px solid red;  /* set a border for all printed pages */
  }
}
p.main {
    text-indent: 50px;
}

/*css for out back to top*/     
    #back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    right: 0;
    background-color: #DDD;
    color: #555;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
}
#back2Top:hover {
    background-color: #DDF;
    color: #000;
}
	</style>

	<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=800, left=300, top=55"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size:5px; font: 7px verdana>');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
<script type="text/javascript">
            /*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});

 /*Scroll to top when arrow up clicked END*/
</script>

<div class="panel-body" ">
	<div class="container">
		<div class="panel panel-default">
  <div class="panel-heading">  
		<div class="panel panel-primary"  >
    <div class="panel-heading"><center><strong> ATTENDANCE LIST OF STUDENTS</center></div></strong>
    <div class="panel-body">
    	
<div id="print_content" >
</head>
<body>
     <div class="se-pre-con"></div>  
<?php
if(isset($_POST['send'])){
$from=$_POST['from'];
$intake=$_POST['intake'];
$branch=$_POST['branch'];
$level_id=$_POST['level_id'];
$dept_id=$_POST['dept_id'];
$program_id=$_POST['program_id'];
$to=$_POST['to'];

$conn=mysqli_connect("localhost","root","","churAdmission")or die(mysqli_connect_error());
 $query="SELECT DISTINCT registration.ID, registration.reg_date, students.reg_id, students.ID,students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name,departement.dept_name,program.program_name, registration.intake,registration.branch,program.program_name,registration.startin_intake, faculity.faculity_name from students
         INNER JOIN registration  ON students.ID=registration.ID
         INNER JOIN departement ON registration.dept_id=departement.dept_id 
          
          INNER JOIN faculity ON faculity.faculty_id=departement.faculity_id
          INNER JOIN program ON program.program_id=registration.program_id
         INNER JOIN level ON level.level_id=registration.level_id WHERE registration.dept_id='$dept_id' AND registration.program_id='$program_id' AND registration.level_id='$level_id' AND branch='$branch' AND reg_date between '$from' AND '$to' ";
 $results=mysqli_query($conn,$query) or die(mysqli_error($conn));
        ?>

<?php
if(mysqli_num_rows($results)<=0){
	echo "<center><h1>No one found</h1> </center>";
}
else{
?>
 <div style="overflow: auto;">
 	<table  class="table table-hover">
		<tr><td><img src="pic/churlogo.png"></td><td><b>Christian University Of Rwanda<br>P.O.Box 6638 Kigali<br>Tel:(+250)788310048/0789850000/0788310047(<B>KIGALI</B>)<br>
		Tel:(+250)788310048/0789850000/0788310047(<B>KARONGI)</B><br>Email:info@chur.ac.rw<br>Website: http://www.chur.ac.rw</b></td></tr>
		</table>
		<p style="border-bottom: solid;"></p><br><br>
 	<p><b>Attendance List of students in <?php echo $level_id;?> departement of <?php echo $dept_id;?> in  <?php echo $intake;?> intake </b></p><br>
 	<p>Module name:...................................Module ID:...............</h6>
 	
 	<p>
<table class="table table-hover" border="1" style="border-color: #000;">
	<tr>
		
		<th colspan="4" style="border:0px;"> </th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
		<th>Date</th>
	</tr>
		<tr>
		<th>No</th>	
		<th >Name</th>
		<th>Departement</th>
		<th>Reg No</th>
		<th> </th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
<div id="content">
	<?php

	$i=0;
while($row=mysqli_fetch_assoc($results)){
	

$i++;
?>
<tr>
		<td><?=$i;?></td>
	    <td><?php echo $row['f_name'].' '.$row['l_name'];?></td>
	     <td><?php echo $row['dept_name'];?></td>
	      <td><?php echo strtoupper($row['reg_id']);?></td>
	       <td></td>
	       <td></td>
	       <td></td>
	       <td></td>
	       <td></td>
	       <td></td>
	       <td></td>  
	       <td></td> 
	       <td></td>
	       <td></td>
	       <td></td>
	       <td></td>
	       <td></td>
	       <td></td>
	       <td></td>  
	       <td></td> 
	       <td></td>
	       
	</tr>
	<?php
}
?>
</table>
</div>
</p>
<?php
}}
?>
</div>
</table></p>

</div>

</div>
<center><button class="btn btn-default"><a href="javascript:Clickheretoprint()" style="text-decoration: none;" >PRINT  LIST</a></button></center>

</div>
</div>
</div>
</div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
</div>
</table>
</p></div>
</center></div></div></div></div></div></body></div></div></head></html>
<footer class="footer">
  <?php
 
  include('footer.php');
  ?>
</footer>