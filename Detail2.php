<?php
include('header_user.php');
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
  <div class="se-pre-con"></div>
    <div class="page-break">
  <div class="panel panel-primary" style="max-width: 800px; margin: auto; ">
    <div class="panel-heading" style="text-align: center;"><strong >Detail information</strong></div>
    <div class="panel-body">
    <div id="divToPrint">
      
<?php
$ID=$_GET['typeahead'];
//$f_name=$_GET['f_name'];
$conn=mysqli_connect("localhost","root","","churAdmission");
$query="SELECT DISTINCT registration.reg_id, students.ID, students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name,departement.dept_name,students.guardian_name,students.guardian_tel,students.fathername,students.mothername,students.sec_option,students.birthdate,program.program_name,registration.intake,registration.branch,program.program_name,registration.reg_date,registration.startin_intake from students
         
         INNER JOIN program_dept 
         INNER JOIN registration  ON students.ID=registration.ID 
         INNER JOIN departement ON registration.dept_id=departement.dept_id
         INNER JOIN program ON program.program_id=registration.program_id
         INNER JOIN level ON registration.level_id=level.level_id WHERE students.email='$ID' OR students.tel='$ID' OR students.ID='$ID' OR students.f_name='$ID' OR students.l_name='$ID' 
         OR registration.reg_id='$ID' OR registration.program_id='$ID' OR departement.dept_name='$ID'OR departement.dept_id='$ID' OR program.program_name='$ID' OR level.level_name='$ID'";
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

      Full name: <b><?php echo $rows['f_name'].' '.$rows['l_name'];?></b><br> 
      Reg No: <b><?php echo $rows['reg_id'];?></b><br>
      ID: <b><?php echo $rows['ID'];?></b><br>
      Birth Date: <?php echo $rows['birthdate'];?><br>
      Gender: <b> <?php echo $rows['sex'];?></b> <br>
      Email: <b><?php echo $rows['email'];?></b><br>
      Phone: <b>(+25)<?php echo $rows['tel'];?></b><br>
      Secondary section: <b><?php echo $rows['sec_option'];?></b><br>
      Guardian name: <b><?php echo $rows['guardian_name'];?></b><br>
      Guardian contact: <b><?php echo $rows['guardian_tel'];?></b><br>
      Father name: <b><?php echo $rows['fathername'];?></b><br>
      Mother name: <b><?php echo $rows['mothername'];?></b><br>
      Departement: <b><?php echo $rows['dept_name'];?></b><br>
      Program: <b><?php echo $rows['program_name'];?></b><br>
      Level: <b><?php echo $rows['level_name'];?></b><br>
      Intake: <b><?php echo $rows['intake'];?></b><br>
      Branch: <b><?php echo $rows['branch'];?></b><br>
      Date registered: <b><?php echo $rows['reg_date'];?></b><br>
      Date Started: <b><?php echo $rows['startin_intake'];?></div></b><br>

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