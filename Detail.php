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
					<style type="text/css">
						.error{
							color: red;
							
							font-style: italic;
							font-size: 12px;
						}
		img {
    display: block;
    /*margin: 0 left;*/
	}
	table{
		width: 300px;
		border:4px;
		border-color: black;
	}
	table.u{
		width: 600px;
		
		font-size: 13px;
	}
	body{
    font-family: Calibri ;
    font-size: 13px;
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
	<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=1100,height=600');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
</head>
<body ><br>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
	
		<div class="page-break">
	<div class="panel panel-primary" style="max-width: 800px; margin: auto; ">
    <div class="panel-heading" style="text-align: center;"><strong >Detail information</strong></div>
    <div class="panel-body">
    <div id="divToPrint">
    	
<?php
$ID=$_GET['typeahead'];
//$f_name=$_GET['f_name'];
//$conn=mysqli_connect("localhost","root","","churAdmission");
$query="SELECT DISTINCT students.reg_id, students.ID, students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name,departement.dept_name,students.guardian_name,students.guardian_tel,students.fathername,students.mothername,students.sec_option,students.birthdate,program.program_name,registration.intake,registration.branch,program.program_name,registration.reg_date,registration.startin_intake from students
         INNER JOIN registration  ON students.ID=registration.ID 
         INNER JOIN departement ON registration.dept_id=departement.dept_id
         INNER JOIN program ON program.program_id=registration.program_id
         INNER JOIN level ON registration.level_id=level.level_id WHERE students.email='$ID' OR students.tel='$ID' OR students.ID='$ID' OR students.f_name='$ID' OR students.l_name='$ID' 
         OR students.reg_id='$ID' OR registration.program_id='$ID' OR departement.dept_name='$ID'OR departement.dept_id='$ID' OR program.program_name='$ID' OR level.level_name='$ID' ORDER BY registration.reg_date DESC";
 $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
while ($rows=mysqli_fetch_assoc($result)) {
	//$date=$rows['date'];

	?>
  <div class="page-break">
    <DIV style="page-break-after:always">
	<table class="table " style="text-align: left;">
    <thead><tbody>
		<tr><td><img src="pic/churlogo.png"></td><td><b>Christian University Of Rwanda<br> P.O.Box 6638 Kigali<br>Tel:(+250) 788310048/ 0789850000/ 0788310047(<B> KIGALI</B>)<br>
		Tel:(+250) 788310048/0789850000 /0788310047(<B> KARONGI)</B><br> Email:info@chur.ac.rw<br>Website: http://www.chur.ac.rw</b></td></tr>
    </tbody>
    </thead>
		</table><p style="border-bottom: solid;"></p>

	<b><p style="text-align: right;">Date:<?php echo date('D');?>/ <?php echo date('M');?> / <?php echo date('Y');?></p></b>
			
			<center><h3><b><u>Full info for <?php echo $rows['f_name'].' '.$rows['l_name'];?> </u></b></h3></center><br>
      <table class="table" style="font-size: 14px;">
			<tr><td>Full name:</td><td> <b><?php echo $rows['f_name'].' '.$rows['l_name'];?></b></td></tr>
			<tr><td>Reg No:</td><td> <b><?php echo $rows['reg_id'];?></b></td></tr>
			<tr><td>ID: </td><td><b><?php echo $rows['ID'];?></b></td></tr>
			<tr><td>Birth Date: </td><td><b><?php echo $rows['birthdate'];?></b></td></tr>
			<tr><td>Gender: </td><td><b> <?php echo $rows['sex'];?></b> </td></tr>
			<tr><td>Email:</td><td> <b><?php echo $rows['email'];?></b></td></tr>
			<tr><td>Phone: </td><td><b>(+25)<?php echo $rows['tel'];?></b></td></tr>
			<tr><td>Secondary section: </td><td><b><?php echo $rows['sec_option'];?></b></td></tr>
			<tr><td>Guardian name: </td><td><b><?php echo $rows['guardian_name'];?></b></td></tr>
			<tr><td>Guardian contact: </td><td><b><?php echo $rows['guardian_tel'];?></b></td></tr>
			<tr><td>Father name: </td><td><b><?php echo $rows['fathername'];?></b></td></tr>
			<tr><td>Mother name: </td><td><b><?php echo $rows['mothername'];?></b></td></tr>
			<tr><td>Departement: </td><td><b><?php echo $rows['dept_name'];?></b></td></tr>
			<tr><td>Program: </td><td><b><?php echo $rows['program_name'];?></b></td></tr>
			<tr><td>Level: </td><td><b><?php echo $rows['level_name'];?></b></td></tr>
			<tr><td>Intake: </td><td><b><?php echo $rows['intake'];?></b></td></tr>
			<tr><td>Branch: </td><td><b><?php echo $rows['branch'];?></b></td></tr>
			<tr><td>Date registered:</td><td> <b><?php echo $rows['reg_date'];?></b></td></tr>
			<tr><td>Date Started: </td><td><b><?php echo $rows['startin_intake'];?></div></b></td></tr>
</table>
<?php
}
?>

</div>

</div>
</div>
</div>
</div>
<center>
<button class="btn btn-default"  id="button" onclick="PrintDiv();">PRINT</button>
</center>
</div></div></div></div></DIV>
</div></div></div></div></div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<footer class="footer">
  <?php
  include('footer.php');
  ?>
</footer>
</body>