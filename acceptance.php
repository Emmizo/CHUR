
<?php
include('head_admin.php');
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
		font-size: 10px;
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
  //paste this code under head tag or in a seperate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
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
	<?php

if(isset($_POST['sendMarch'])){
$from=$_POST['from'];
$branch=$_POST['branch'];
$to=$_POST['to'];
?>
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
  <div class="panel panel-primary" style="max-width: 800px; margin: auto;">
    <div class="se-pre-con"></div>
      
    <div class="panel-heading" style="text-align: center;"><strong >LIST OF STUDENTS ACCEPTANCE LETTER FOR  INTAKE</div></strong>
    <div class="panel-body" style="max-width: 650px;">
    <div id="divToPrint">	
<?php
$con=mysqli_connect("localhost","root","","churAdmission")or die(mysqli_connect_error());
 $query="SELECT DISTINCT registration.ID, registration.reg_date, registration.reg_id, students.ID,students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name,departement.dept_name,program.program_name, registration.intake,registration.branch,program.program_name,registration.startin_intake, faculity.faculity_name from students
        INNER JOIN program_dept 
         INNER JOIN registration  ON students.ID=registration.ID
         INNER JOIN departement ON registration.dept_id=departement.dept_id 
          
          INNER JOIN faculity ON faculity.faculty_id=departement.faculity_id
          INNER JOIN program ON program.program_id=registration.program_id
         INNER JOIN level ON level.level_id=registration.level_id WHERE  branch='$branch' AND reg_date between '$from' AND '$to' ";
        

 $result=mysqli_query($con,$query) or die(mysqli_error($con));
 if(mysqli_num_rows($result)<=0){
  echo "<center><p style='color:red;'>There is no acceptance letter found between $from To $to in $branch Branch</p> </center>";
}
else{
while ($rows=mysqli_fetch_assoc($result)) {
	//$date=$rows['date'];
	?>
		<p>
      <div class="page-break">
    <DIV style="page-break-after:always">
	<table class="table " style="font-size: 10px">
		<tr><td><img src="pic/churlogo.png"></td><td><b>Christian University Of Rwanda<br>P.O.Box 6638 Kigali<br>Tel:(+250)788310048/0789850000/0788310047(<B>KIGALI</B>)<br>
		Tel:(+250)788310048/0789850000/0788310047(<B>KARONGI)</B><br>Email:info@chur.ac.rw<br>Website: http://www.chur.ac.rw</b></td></tr>
		</table><p style="border-bottom: solid;"></p>
	<b><p style="text-align: right;">Date:<?php echo date('d');?>/ <?php echo date('M');?> / <?php echo date('Y');?></p></b>
			<?php
			echo "<b>To: ".strtoupper($rows['f_name'].' '.$rows['l_name'])."<br>Reference No:  ".''.strtoupper($rows['reg_id']).'</b>';
			?>
			<center><h4><b><u>ACCEPTANCE LETTER</u></b></h4></center><br>
			<?php
			$q="SELECT * FROM fees";
			$result2=mysqli_query($con,$q)or die(mysqli_error($con));
			while ($row=mysqli_fetch_assoc($result2)) {
				# code...
			?>
			<?php
			$qr="SELECT * FROM chairman";
			$result3=mysqli_query($con,$qr)or die(mysqli_error($con));
			while ($ro=mysqli_fetch_assoc($result3)) {
				$total=$row['reg_fees']+$row['student_ID_card']+$row['chursu']+$row['insurance']+$row['library_card']+$row['caution_fees'];
 	echo "Dear Student,<br><br> We are pleased to inform you that your application for admission letter has been accepted at Christian University of Rwanda in <b>".$rows['faculity_name']."</b>, departement of <b>".$rows['dept_name'].'</b> in <b>'.$rows['program_name'].'</b> program <b>'.strtolower($rows['intake']).' intake</b>. Please note the following key information and important dates: <br>
 	<ul><li>The starting of school will be on <b>'.$rows['startin_intake'].'</b></li>
 	<li>You are requested to pay <b>'.$total.' Frw</b> before registration distributed as follows:</li></ul><br>
 	<table border="2" width="500px;">
 		<tr><th>TYPE OF FEE</th><th>AMOUNT</th></tr>
 		<tr><td>Registration fees</td><td><b>'.$row['reg_fees'].' Frw</b></td></tr> 
 		<tr><td>Student ID Card</td><td><b>'.$row['student_ID_card'].' Frw </b></td></tr>
 		<tr><td>CHURSU contribution</td><td><b>'.$row['chursu'].' Frw</b></td></tr>
		<tr><td>Insturance against accident</td><td><b>'.$row['insurance'].' Frw</b></td></tr>
		<tr><td>Student Library Card</td><td><b>'.$row['library_card'].' Frw</b></td></tr>
		<tr><td>Caution Money</td><td><b>'.$row['caution_fees'].' Frw</b></td></tr>
 		<tr><td>Tuition fees</td><td><b>'.$row['tuition_fees'].' Frw</b></td></tr>
 		</table><br><b>CHUR ACCOUNT NUMBER: <br>
 		I&M Bank:</b>  00010-5044731-01-41<br>
 		<b>Equity Bank:</b> 4002200480497<br>
 		<b>COGEBANQUE:</b>  23-01390146734-79
 		<br>Once again, I take this opportunity to congratulate and wish you an enriching exprience at The <br> Christian University of Rwanda.<br><br><br><br><br><b>'.$ro['full_name'].'<br>'.$ro['post'].'</b></DIV></div></p>';
 		}

//else if($rows==false){
	//echo "<center>From <b>".$from."</b> to <b>".$to."</b> no students found.</center>";
//}
         }
}
}}

?>	



</div>
<center>
<button  class="btn btn-default" name="submit" id="button" onclick="PrintDiv();">PRINT ACCEPTANCE</button>
</center>
</div>
</div>

</div>

</div>
</div>
</DIV>
<div>
</div>
</div>
</div>
</DIV>
</div>
</p></div></div></div></div></div></div></div>
</p>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

</body>
</html>
<footer class="footer">
  <?php
 
  include('footer.php');
  ?>
</footer>