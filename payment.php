<html>
<head>
	<?php
	include('head_admin.php');
	include('connect.php');
	?>
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
	<div class="container">
		 <div class="se-pre-con"></div>
		
					<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<title>Christian University of Rwanda</title>
					<link rel="stylesheet" href="cssform/style.css">
					<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-body">
					<div class="panel panel-primary"  style="max-width: 800px; margin: auto;"  >
					 <div class="panel-heading"><center><strong>Structure of payment</strong></center></div>
    				<div class="panel-body">
    					<center>
    					<form class="form-horizontal" method="POST" name="students" onsubmit="return validateform()">
    						<table class="table" style="max-width: 500px">
    						<?php
						$q="SELECT * FROM fees";
						$result2=mysqli_query($conn,$q)or die(mysqli_error($conn));
						while ($row=mysqli_fetch_assoc($result2)) {
						?>
		
 		<tr><th>TYPE OF FEE</th><th>AMOUNT</th></tr>
 		<tr><td>Registration fees</td><td><b><?php echo $row['reg_fees'];?> Frw</b></td></tr> 
 		<tr><td>Student ID Card</td><td><b><?php echo $row['student_ID_card'];?> Frw </b></td></tr>
 		<tr><td>CHURSU contribution</td><td><b><?php echo $row['chursu']; ?> Frw</b></td></tr>
		<tr><td>Insturance against accident</td><td><b><?php echo $row['insurance'];?> Frw</b></td></tr>
		<tr><td>Student Library Card</td><td><b><?php echo $row['library_card'];?> Frw</b></td></tr>
		<tr><td>Caution Money</td><td><b><?php echo $row['caution_fees'];?> Frw</b></td></tr>
 		<tr><td>Tuition fees</td><td><b><?php echo $row['tuition_fees'];?> Frw</b></td></tr>
 		<tr><td></td><td><button class="btn btn-default"><a href="updatePayment.php?fees_id=<?=$row['fees_id'];?>" style="text-decoration: none;">Edit money</a></button></td></tr>
 		<?php
 			}
 			?>
 		</table>

 		
    	</form>
    	</center>
    	</div>
    	</div>
    	</div>	
         </div>
         </div>
        </div>
        </div>
    </body>
        </html>

       <footer class="footer">
      <?php
  		include('footer.php');
  		?>
 </footer>
        </html>					