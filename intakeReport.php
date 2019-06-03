
<?php
include('head_admin.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container">
		
			<div class="panel-heading">
				<div class="panel-body">
					<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<link rel="stylesheet" href="datepicker.css">
					<link rel="stylesheet" href="bootstrap-datepicker3.min.css">
					<link rel="stylesheet" href="cssform/styley.css">
					<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
					<style type="text/css">
						.error{
							color: red;
							font-style: italic;
							
						}
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
	table{
		width: 300px;
		border:4px;
		border-color: black;
	}
	table.u{
		width: 600px;
		font-family: Arial;
		font-size: 13px;
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
 
</script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
</head>
<body  >
<div class="container">
	   <div class="se-pre-con"></div>  
	<div class="panel panel-default">
	<div class="panel-heading">		
  <div class="panel panel-primary" >
    <div class="panel-heading"><center><strong> ATTENDANCE LIST OF STUDENTS</center></div></strong>
    <div class="panel-body">
<form class="form-horizontal" role="form" action="attendance.php" name="students"  onsubmit="return validateform()" onclick="" method="POST">
	<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
<div class="input-radio col-lg-12 col-md-12 col-sm-12">
<label>From</label>
<div class="input-group date" >
<input class="form-control" type="text" name="from" id="datepicker" placeholder="yyyy-mm-dd">
<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
</div>
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
                					include('connect.php');
                					
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
	<label>Branche </label>
	<select name="branch" class="form-control">
	<option></option>
	<option>Kigali</option>
	<option>Karongi</option>
	</select>
	</div>
<div class="input-radio col-lg-12 col-md-12 col-sm-12">
<label>To</label>
<div class="input-group date" >
<input class="form-control" type="text" name="to" id="datepicker1"  placeholder="yyyy-mm-dd">
<span class="input-group-addon"><i class="glyphicon glyphicon-calendar" ></i></span>
</div>
</div>

<div class="input-field col-lg-12 col-md-12 col-sm-12">
	<br>

<button class="btn btn-default"  name="send" id="button" >submit</button>
<button class="btn btn-default " name="reset" >Cancel</button>
 </div>
</div></div>
</form>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
	
	
	$(".level").change(function()
	{
		var level_id=$(this).val();
		var dataString = 'level_id='+ level_id;
		//alert(dataString);
	
		$.ajax
		({
			type: "POST",
			url: "program.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$(".program").html(html);
			} 
		});
	});
	
});
    						</script>
</form>

</div></div></div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>


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
  <?php
  $stoday=date('Y-m-d');
  ?>
<script>
    function validateform(){
            var  from=document.students.from.value;
            var  intake=document.students.intake.value;
            var level_id=document.students.level_id.value;
            var branch=document.students.branch.value;
            var dept_id=document.students.dept_id.value;
            var program_id=document.students.program_id.value;
            var to=document.students.to.value;
            if (from=="") {
                alert("from when? you didn't choose any date");
                return false;
            }
            
            if (dept_id=="") {
            	alert(" Please select department you wish");
            	return false;
            }
            if (dept_id=="select department") {
            	alert(" Please select department you wish");
            	return false;
            }
            if (level_id=="") {
            	alert(" Please select level you wish");
            	return false;
            }
            if (level_id=="select level") {
            	alert(" Please select level you wish");
            	return false;
            }
            if (program_id=="") {
            	alert(" Please select program you wish");
            	return false;
            }
            if (program_id=="select program") {
            	alert(" Please select level you wish");
            	return false;
            }
            if (intake=="") {
            	alert(" Please select intake you wish");
            	return false;
            }
            if (branch=="") {
            	alert(" Please select Branch you wish");
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
