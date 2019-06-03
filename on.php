<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript">

            function redirect1()
            {
                  window.location.assign("on.php")
            }
        </script>

</head>

<body onload="redirect1()">


<?php
include('connect.php');

//if (isset($_POST['intake_id'])) {
	$intake_id=$_GET['intake_id'];
      $intake_status=$_GET['intake_status'];
$query="UPDATE intake_table SET intake_status='ON' WHERE intake_id='$intake_id'" ;
 $result=mysqli_query($conn,$query)or die(mysqli_error($conn));
header("location:select_intake.php");
//}
      ?>

 <form id="myform" action="on.php" method="POST">
      <input type="hidden" name="intake_status" value="ON">
  </form>
  </body>
</html>
