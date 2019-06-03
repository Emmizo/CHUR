
<<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript">

            function redirect1()
            {
                  window.location.assign("off.php")
            }
        </script>

</head>

<body onload="redirect1()">


<?php
include('connect.php');

//if (!empty($_POST['intake_id'])) {
	$intake_id=$_GET['intake_id'];
    $intake_status=$_GET['intake_status'];
$query="UPDATE intake_table SET intake_status='OFF' WHERE intake_id='$intake_id'" ;
 $result=mysqli_query($conn,$query)or die(mysqli_error($conn));
header("location:select_intake.php");
//}
      ?>

 <form id="myform" action="off.php" method="GET">
      <input type="hidden" name="intake_status" >
  </form>
  </body>
</html>

