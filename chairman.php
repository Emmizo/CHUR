<?php
include('head_admin.php');
include('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
    <style type="text/css">
    table{
    border: 1px 
    solid; 
    font: 13px verdana;
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
			</head>	
				<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
				<form class="form-horizontal" role="form" action="" name="students" onsubmit="return validateform()" method="POST">
                    <div class="container">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel panel-primary" style="max-width: 800px; margin: auto;">
					 <div class="panel-heading"><center><strong>CHAIRMAN</strong></center></div>
    				<div class="panel-body">
                        <div class="se-pre-con"></div>
    					<?php
    					   
    						$sqr="SELECT * FROM chairman";
    						$result=mysqli_query($conn,$sqr)or die(mysqli_error($conn));
    						while ($row=mysqli_fetch_assoc($result)) {
    						$chairman_id=$row['chairman_id'];
    					?>
                        <center>
    					   <table class="table">
								<tr><th>Chairman name</th><th>POST</th><th>Option</th></tr>
                            	<tr><td><?php echo $row['full_name'] ?> </td><td><?php echo $row['post'] ?> </td><td><button class="btn btn-default"><a href="editchairman.php?chairman_id=<?=$chairman_id;?>"> EDIT</a></button></td></tr>
							</table>
                            </center>
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
<header>
   
</style>
</header>
</form>

</div>
</body>
</html>
<script>
    function validateform(){
            var  full_name=document.students.full_name.value;
            var post=document.students.post.value;
            if (full_name=="") {
                alert("Please insert chairman name");
                return false;
            }
            if (post=="") {
                alert("Please insert chairman post");
                return false;
            }
        }
</script>
<footer class="footer">
<?php
include('footer.php');
?>
</footer>
