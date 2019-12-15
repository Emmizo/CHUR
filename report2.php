
<?php
include('header_user.php');
include('connect.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">


					<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<link rel="stylesheet" href="datepicker.css">
					<link rel="stylesheet" href="cssform/styley.css">
					<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
					<style type="text/css">
						.error{
							color: red;
							font-style: italic;
							
						}
            table{
    border: 1px 
    solid; 
    font: 10px verdana;
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
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
  border: 1px solid #c5c5c5;
  background: #f6f6f6;
  font-weight: normal;
  color: #454545!important;
}
.ui-widget-header .ui-icon {
  background-image: url(images/ui-icons_444444_256x240.png);
  color: black;
  color: black!important;
  background:#428bca;
}
					</style>
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
<script>
  //paste this code under head tag or in a seperate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
</head>
<body>
   <!-- <div class="se-pre-con"></div> -->

<div class="container">


<div class="panel panel-default">
	<div class="panel-heading" >		
  <div class="panel panel-primary">
    <div class="panel-heading"><strong>LIST OF STUDENTS  REGISTERED FROM </div></strong>
    <div class="panel-body">
<form action=""  name="students" onsubmit="return validateform()" method="post">
<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
<div class="input-radio col-lg-12 col-md-12 col-sm-12">
<label>From</label>
<div class="input-group date" >
<input class="form-control" type="text" name="from" id="datepicker" placeholder="yyyy-mm-dd">
<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
</div>
</div>
<div class="input-radio col-lg-12 col-md-12 col-sm-12">
<label>To</label>
<div class="input-group date" >
<input class="form-control" type="text" name="to" id="datepicker1" placeholder="yyyy-mm-dd">
<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
</div>
</div>
<div class="input-field col-lg-12 col-md-12 col-sm-12">
  <br>
<button class="btn btn-default "  name="send" id="button" >Report</button>
<button class="btn btn-default  " name="reset">Cancel</button>
  <div>
  <br>
	<button class="btn btn-default"><a href="javascript:Clickheretoprint()"  style="text-decoration: none;">PRINT</a></button></center>
 </div></div>
</div>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</table>
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

<div id="print_content" >
</form>
<?php
if(isset($_POST['send'])){
$from=$_POST['from'];

$to=$_POST['to'];
?>	
 <thead>
 	<p>
     <div style="overflow: auto;">
<table class="table " border="1" style="max-width: 1200px; " >
		<tr style="background-color: #cae8ea">
      <th>No</th>
		<th >First name</th>
		<th>Last Name</th>
		<th>Sex</th>
		<th>Reg number</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Departement</th>
		<th>Program</th>
		<th>Level</th>
		<th>Intake</th>
		<th >Date</th>
		<th colspan="2">Option</th>
	</tr>
		</thead>
		
<div id="content">
<?php

//$f_name=$_GET['f_name'];
//$conn=mysqli_connect("localhost","root","","churAdmission");
$query="SELECT DISTINCT registration.idreg,students.reg_id, students.ID, students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name,departement.dept_name,students.guardian_name,students.guardian_tel,students.fathername,students.mothername,students.sec_option,students.birthdate,program.program_name,registration.intake,registration.branch,program.program_name,registration.reg_date,registration.startin_intake from students
         
         INNER JOIN program_dept 
         INNER JOIN registration  ON students.ID=registration.ID 
         INNER JOIN departement ON registration.dept_id=departement.dept_id
         INNER JOIN program ON program.program_id=registration.program_id
         INNER JOIN level ON registration.level_id=level.level_id WHERE registration.branch='karongi' AND reg_date between '$from' AND '$to'";
 $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
 $a=0;
while ($row=mysqli_fetch_assoc($result)) {
  $a++;
?>
<tr>
	<td><?=$a;?></td>
	    <td><?php echo $row['f_name'];?></td>
	    <td><?php echo $row['l_name'];?></td>
	     <td><?php echo $row['sex'];?></td>
	      <td><b><?php echo strtoupper($row['reg_id']);?></b></td>
	       <td><?php echo $row['email'];?></td>
	       <td><?php echo $row['tel'];?></td>
	       <td><?php echo $row['dept_name'];?></td>
	       <td><?php echo $row['program_name'];?></td>
	       <td><?php echo $row['level_name'];?></td>
	       <td><?php echo $row['intake'];?></td>
	       <td><?php echo $row['reg_date'];?></td>  
	       <td><button class="btn btn-default" ><a href="updateStudent2.php?ID=<?=$row['idreg'];?>" style="text-decoration: none;">Edit</a></td></button>
          <td ><button class="btn btn-default" ><a href="Detail2.php?typeahead=<?=$row['ID']?>" style="text-decoration: none;"> Detail</a></button></td>
	</tr>
	<?php
}
?>
<tr style="background-color:green; color:white; font-weight:bold; font-size:20px"> 
	<!--<td colspan="8" >Total students registed from <?php //echo $from."  ".$to; ?></td>  <td><?php //echo $a;?></td></tr>-->
</table>
</div>
</p>
</fieldset>
<?php
}
?>
</div>
</div>
</div>
</div>








</div>







</div>
</div>
</div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<footer class="footer">
  <?php
  include('footer.php');
  ?>
</footer>

</body>
</html>
<link rel="stylesheet" href="jquery-ui.css">
<link rel="stylesheet" href="style.css">
<script src="source.js"></script>
<script src="now2.js"></script>
<style type="text/css">
	
	#datepicker{
		color:black;
	}

    
    #datepicker{
      color:black;
    }
  </style>
  <script>

  $( function() {
    $( "#datepicker" ).datepicker({dateFormat:'yy-mm-dd'});
   
  } );

  </script>
  <style type="text/css">
	
	#datepicker{
		color:black;
	}

    #datepicker{
      color:black;
    }
  </style>
  <script>

  $( function() {
    $( "#datepicker1" ).datepicker({dateFormat:'yy-mm-dd'});
   
  } );
  
  </script>
  <?php
  $stoday=date('Y-m-d');
  ?>
<script>
    function validateform(){
            var  from=document.students.from.value;
            
            var to=document.students.to.value;
            if (from=="") {
                alert("from when? you didn't choose any date");
                return false;
            }
            if (to=="") {
                alert("Until when? you didn't choose any date");
                return false;
            }
        }
</script>
