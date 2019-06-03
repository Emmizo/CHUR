<?php
include('head_admin.php');
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
			</head>
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
				<form class="form-horizontal" name="update"  onsubmit="return validateform()" method="POST">
					<div class="container">
					<div class="panel panel-primary">
					 <div class="panel-heading"><center><strong>SCHEDULE DATE TO START INTAKE</strong></center></div>
    				<div class="panel-body">
    					<?php
    					$fromError = '';
						$datestartError = '';
						$intakeError='';
						$toError='';

						$errorMessage = '';
						$errorMessage2 = '';
						$errorMessage3 = '';

							$errors = 0;
    					if (isset($_POST['SetMarch'])) {
    						$from=$_POST['from'];
    						$dateSt=$_POST['startin_intake'];
    						
    						$to=$_POST['to'];

    					if(empty($_POST['from'])){
						$error = 1;
						$fromError = 'Enter your date registration started*';
						}

						if(empty($_POST['startin_intake'])){
						$errors = 1;
						$datestartError = 'Enter your date you want to set as satrting*';	
						}
				
						if(empty($_POST['to'])){
						$errors3=1;
						$toError = 'Enter your date you want to set as ending of Registration published*';	
						}

						if($errors == 0){
    						$sqr="UPDATE `registration` SET `startin_intake` = '$dateSt' WHERE  reg_date between '$from' AND '$to' ";
    						$result=mysqli_query($conn,$sqr)or die(mysqli_error($conn));

						if($result == true){
						echo('<center><div class="alert alert-success" style="color:black;">
    					<strong>Success!</strong> Intake will start on <b>'.$dateSt.'</b><div class="alert alert-warning">
    				<strong>Warning!</strong> If you made mistake on date to start please update again before you print acceptance letter!</div>.</div></center>');
    						}}}
    					?>
    					   <div class="se-pre-con"></div>  
					<div class="row"  >
						<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>From</label>
								<div class="input-group date" >
								<input type="text" class="form-control" name="from" id="datepicker" placeholder=" Start Registration date"> 
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
								</div>
								<div class="error"><?php echo $fromError; ?></div>
							</div>

							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>DATE TO START</label>
								<div class="input-group date" >
								<input type="text" class="form-control" name="startin_intake" id="datepicker1" placeholder="Schedule Date intake will start">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
								</div>
								<div class="error"><?php echo $datestartError; ?></div>
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>To</label>  
								<div class="input-group date" >
								<input type="text" class="form-control" name="to" id="datepicker2" placeholder=" End of regist date">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
								</div>
								<div class="error"><?php echo $toError; ?></div>
							</div>	
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<br>
								<button class="btn btn-default" name="SetMarch" id="button">Accept</button>
								<button class="btn btn-default  " name="resete">Cancel</button>
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
    $( "#datepicker2" ).datepicker({dateFormat:'yy-mm-dd'});
   
  } );

  </script>
  <script>
	function validateform(){
		/*var tday="<?=$stoday?>";
			var from=document.update.from.value;
			var dateSt=document.update.dateSt.value;
			var to=document.update.to.value;
			var intake=document.update.intake.value;

			if (from=="") {
				alert("please select date");
				return false;
			}
			if (dateSt=="") {
				alert("please select date intake will start");
				return false;
			}
			if (intake=="---select program---") {
				alert("please select intake you wish to update date");
				return false;
			}
			if (to=="") {
				alert("please select date");
				return false;
			}
		}*/
	</script>
	 <footer class="footer">
  <?php
  include('footer.php');
  ?>
</footer>

	