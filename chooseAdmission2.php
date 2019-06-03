<?php
include('header_user.php');
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
				<body>
					<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<title>chur</title>
					<link rel="stylesheet" href="cssform/styley.css">
					<style type="text/css">
						.error{
							color: red;
							font-style: italic;
							font-size: 12px;
						}
					</style>
					<script type="text/javascript">
						
						$('#datepicker input').click(function(event){
							$('#datepicker').date("datepicker").show();
						});
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
				</head>
				<br><br>
				<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
				<form class="form-horizontal" role="form" action="acceptance2.php" name="students"  onsubmit="return validateform()" onclick="" method="POST">
					<div class="container">
						<div class="panel panel-default">
						<div class="panel-heading">
					<div class="panel panel-primary" style="max-width: 1000px; margin: auto;">
					 <div class="panel-heading"><center><strong>SET DATE TO START IN INTAKE</strong></center></div>
    				<div class="panel-body">
    					<div class="se-pre-con"></div>
					<div class="row"  >
						<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								
								<label>From</label>
								<div class="input-group date" >
								<input type="text" class="form-control" name="from" id="datepicker" placeholder=" Start Registration date"> 
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
								</div>
								</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Branch:</label>
								<input class="form-control" type="text" name="branch" value="Karongi" readonly>
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>To</label>  
								<div class="input-group date" >
								<input type="text" class="form-control" name="to" id="datepicker1" placeholder=" End of registration date">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
								</div>
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<br>
								<button class="btn btn-default" name="sendMarch" id="button">Accept</button>
								<button class="btn btn-default  " name="resete">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
		</form>
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
<script src="source.js"></script>
  <script src="now2.js"></script>
  <style type="text/css">
    
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
<script src="source.js"></script>
  <script src="now2.js"></script>
  <style type="text/css">
    
    #datepicker{
      color:black;
    }
  </style>
  <script>

  $( function() {
    $( "#datepicker1" ).datepicker({dateFormat:'yy-mm-dd'});
   
  } );
  
  </script>
  <script>
    function validateform(){
            var  from=document.students.from.value;
            var  branch=document.students.branch.value;
            var to=document.students.to.value;
            if (from=="") {
                alert("from when? you didn't choose any date");
                return false;
            }
            
            if (branch=="") {
            	alert("you did not choose intake you want");
            	return false;
            }
            if (to=="") {
                alert("Until when? you didn't choose any date");
                return false;
            }
        }
</script>
<footer class="footer">
  <?php
  include('footer.php');
  ?>
</footer>

  