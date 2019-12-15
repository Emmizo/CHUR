


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
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								
								<label >Department</label>
								<select name="dept_id" class="form-control index" id="dept_id" onchange="getId2(this.value);" >

                				<option  selected="selected" ></option>
                					//populate value using php
                					<?php
                					
                					
                    				$query = "SELECT * FROM departement";
                    				$results=mysqli_query($conn, $query);
                    				//loop
                   				 foreach ($results as $dept){
                   				 			 //$program_id=$dept['program_id'];
                   				 		?>
                   				 			<option value="<?php echo $dept["dept_id"];?>"><?php echo $dept["dept_name"];?></option>

									<?php
												}
                					?>
            			</select>
							</div>
								<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<label>Level </label>
								<select name="level_id" class="form-control level" id="LevelList" onchange="getId(this.value);">
									<option  selected="selected"></option>
								</select>
							</div>

							<div class=" input-field col-lg-12 col-md-12 col-sm-12" class="">
								<label>Program </label>
								<select name="program_id" class="form-control program" id="programList">
									<option selected="selected"></option>
								</select>
							</div>
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
	<label>Intake </label>
									<select name="intake" class="form-control">
										<option></option>
										<?php
                					//include('connect.php');
                					
                    				$query = "SELECT * FROM intake_table ";
                    				$results=mysqli_query($conn, $query);
                    				//loop
                   				 foreach ($results as $intake){
                   				 			 //$program_id=$dept['program_id'];
                   				 		?>
                   				 			<option value="<?php echo $intake["intake_name"];?>"><?php echo $intake["intake_name"];?></option>

									<?php
												}
                					?>
								</select>
							
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
								<button class="btn btn-default btn-info" name="sendMarch" id="button">Accept</button>
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
		<script type="text/javascript">
	$(document).ready(function()
{
	$(".index").change(function()
	{
		var dept_id=$(this).val();
		var dataString = 'dept_id='+ dept_id;
		//alert(dataString);
		
		$.ajax
		({
			type: "POST",
			url: "level.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$(".level").html(html);
			} 
		});
	});
	
	
	$(document).on('change', 'select#LevelList',function()
	{
		var level_id=$(this).val();
		var dept_id = $('select#LevelList').find(':selected').attr('data');
		let Obj={
			level_id:level_id,
			dept_id:dept_id
		}
		$.ajax
		({
			type: "POST",
			url: "program.php",
			data: Obj,
			cache: false,
			success: function(html)
			{
				$(".program").html(html);
			} 
		});
	});
	
});
    						</script>
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
            var dept_id=document.students.dept_id.value;
            var level_id=document.students.level_id.value;
            var program_id=document.students.program_id.value;
            var to=document.students.to.value;
            if (from=="") {
                alert("from when? you didn't choose any date");
                return false;
            }
            
            if (branch=="") {
            	alert("you did not choose intake you want");
            	return false;
            }
            if(dept_id==""){
            	alert("choose departement please");
            	return false;
            }
            if(level_id=="select level"){
            	alert("Choose level please");
            	return false;
            }
            if(program_id=="select program"){
            	alert("Choose program Please");
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

  