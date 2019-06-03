<?php
include('header.php');
?>

<html>

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-body">
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
					
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <script src="../js/bootstrap-datepicker.js"></script>
     <script src="bootstrap-datepicker.min.css"></script>
      <script src="bootstrap.min.js"></script>
      <script src="jquery-1.8.3.js"></script>
      <link rel="stylesheet" href="datepicker.css">
		<script type="js/jquery.min.js"></script>
		<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    <link rel=”stylesheet” href=”//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css”>

<link href=”//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css” rel=”stylesheet”>
					<title>Christian University of Rwanda</title>
					<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    

					<style type="text/css">
					@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
* {
}
.form-horizontal {
  padding: 25px 0;
  position: relative;
  height: 50%
  
}


form input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
form input:focus {
  background-color: #A7C0DC;
  
  color: black;
}


select:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
select:focus {
  background-color: #A7C0DC;
  width: 323px;
  color: black;
}
.btn:hover {
  background-color: #A7C0DC;
}


						.error{
							color: red;
							
							font-style: italic;
							font-size: 12px;
						}
						table{
   				 border: 1px 
   			 solid; 
    		font: 13px verdana;
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
			<body background="images/bgfront.jpg">
<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
				<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
  					<div class="panel panel-primary" style=" margin: auto;">
					 <div class="panel-heading"><center><strong><i>STUDENT REGISTRATION FORM</i></strong></center></div>
    				<div class="panel-body">
    					<form class="form-horizontal" method="POST" name="students"  onsubmit="return validateform()">
    					<?php
//include('connect.php');
if (isset($_POST['submit'])) {
	$conn=mysqli_connect("localhost","root","","churAdmission");
/*for registration Number*/
$characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = 'CHUR'.date('Y');
            for ($i = 0; $i < 3; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        $reg_id=$randomString; 
/*
check if there is no error
*/
if (empty($error)) {
	
	$f_name=trim($_POST['f_name']);
	$l_name=trim($_POST['l_name']);
	$sex=trim($_POST['sex']);
	$birthdate=$_POST['birthdate'];
	$email=trim($_POST['email']);
	$tel=trim($_POST['tel']);
	
	$sec_option=trim($_POST['sec_option']);
	$guardian_name=trim($_POST['guardian_name']);
	$guardian_tel=trim($_POST['guardian_tel']);
	$fathername=trim($_POST['fathername']);
	$mothername=trim($_POST['mothername']);
	$dept_id=trim($_POST['dept_id']);
	$program_id=trim($_POST['program_id']);
	$level_id=trim($_POST['level_id']);
	$intake=trim($_POST['intake']);
	$branch=trim($_POST['branch']);
	$ID=trim($_POST['ID']);
	$reg_date=trim($_POST['reg_date']);
	//$startin_intake=trim($_POST['startin_intake']);
	/*code will help studentsto get auto inf once he/she already registered*/
  
 
/*code will help students registered to get notification*/
$query4 = mysqli_query($conn,"SELECT * FROM registration WHERE ID='$ID' AND dept_id='$dept_id' AND sec_option='$sec_option'")or die(mysqli_error($conn)); 
$rows = mysqli_fetch_assoc($query4);
$sqr=mysqli_query($conn,"SELECT * FROM students WHERE ID='$ID'")or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($sqr);
$sqr2=mysqli_query($conn,"SELECT * FROM students WHERE ID='$ID' AND f_name='$f_name' OR l_name='$l_name' ")or die(mysqli_error($conn));
$result = mysqli_fetch_assoc($sqr2);
if (mysqli_num_rows($sqr)<=0)   {
	
$sql="INSERT INTO `students` (`ID`, `f_name`, `l_name`, `sex`, `birthdate`, `email`, `tel`, `sec_option`, `guardian_name`, `guardian_tel`, `fathername`, `mothername`) VALUES ('$ID', '$f_name', '$l_name', '$sex', '$birthdate', '$email', '$tel', '$sec_option', '$guardian_name', '$guardian_tel', '$fathername', '$mothername')";
			$query = mysqli_query($conn, $sql)or die(mysqli_error($conn));

$sql3="INSERT INTO `registration` (`reg_id`, `ID`, `program_id`, `dept_id`, `reg_date`, `intake`, `branch`, `sec_option`, `level_id`) VALUES ('$reg_id', '$ID', '$program_id', '$dept_id', '$reg_date', '$intake', '$branch', '$sec_option', '$level_id')";		
$query2= mysqli_query($conn, $sql3)or die(mysqli_error($conn));
		echo('<center><div class="alert alert-success" style="color:black;">
    <strong>Success!</strong> Thank you <b>'.$f_name.' '.$l_name.'</b> for your registration<div class="alert alert-info">
    <strong>More Info!</strong> You should <a href="#" class="alert-link">read this message </a>.
  </div>.
  </div></center>');	

  $to = "$email";
         $subject = "Registration notification from Christian University Of Rwanda";
         
         $message = '<b>Dear, '. strtoupper($f_name).' '.$l_name.' Your registration received well </b>';
         $message .= "<h5>We will let you know when you will come to take acceptance letter, keep follow our website info.</h5>";
        
         $message .='<br><b>NB:</b> if you meet with any problem call us on 078.....';
         $header = "From:Christian University of Rwanda \r\n";
         $header .= "Cc:$email \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            //echo "<center>notification sent... to ".$email." </center>";
         }else {
            echo "Message could not be sent...";
			}		
		}

		elseif (mysqli_num_rows($query4)>0 AND mysqli_num_rows($sqr2)>0)  {

$qr10=mysqli_query($conn,"UPDATE `registration` SET level_id='$level_id', reg_date='$reg_date',program_id='$program_id',branch='$branch', startin_intake='0000-00-00', intake='$intake'
 WHERE `registration`.`ID`='$ID' AND dept_id='$dept_id' AND sec_option='$sec_option'")or die(mysqli_error($conn));

		echo('<center><div class="alert alert-success" style="color:black;">
    <strong>Success!</strong> Thank you <b>'.$f_name.' '.$l_name.'</b>  for your registration<div class="alert alert-info">
    <strong>More Info!</strong> You should <a href="#" class="alert-link">read this message </a>.
  </div>.
  </div></center>');

		$to = "$email";
         $subject = "Registration notification from Christian University Of Rwanda";
         
         $message = '<b>Dear, '. strtoupper($f_name).' '.$l_name.' Your registration received well </b>';
         $message .= "<h5>We will let you know when you will come to take acceptance letter, keep follow our website info.</h5>";
         
         $message .='<br><b>NB:</b> if you meet with any problem call us on 078.....update';
         $header = "From:Christian University of Rwanda \r\n";
         $header .= "Cc:$email \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            //echo "<center>notification sent... to ".$email." </center>";
         }else {
            echo "Message could not be sent...";

}
	}
elseif(mysqli_num_rows($sqr2)>0){
	$sql2="INSERT INTO `registration` (`reg_id`, `ID`, `program_id`, `dept_id`, `reg_date`, `intake`, `branch`, `sec_option`, `level_id`) VALUES ('$reg_id', '$ID', '$program_id', '$dept_id', '$reg_date', '$intake', '$branch', '$sec_option', '$level_id')";		
$query2= mysqli_query($conn, $sql2)or die(mysqli_error($conn));
		echo('<center><div class="alert alert-success" style="color:black;">
    <strong>Success!</strong> Thank you <b>'.$f_name.' '.$l_name.'</b> for your registration<div class="alert alert-info">
    <strong>More Info!</strong> You should <a href="#" class="alert-link">read this message </a>.
  </div>.
  </div></center>');	

  $to = "$email";
         $subject = "Registration notification from Christian University Of Rwanda";
         
         $message = '<b>Dear, '. strtoupper($f_name).' '.$l_name.' Your registration received well </b>';
         $message .= "<h5>We will let you know when you will come to take acceptance letter, keep follow our website info.</h5>";
        
         $message .='<br><b>NB:</b> if you meet with any problem call us on 078.....new faculty';
         $header = "From:Christian University of Rwanda \r\n";
         $header .= "Cc:$email \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            //echo "<center>notification sent... to ".$email." </center>";
         }else {
            echo "Message could not be sent...";

}		
	}else{
		echo '<center><div class="alert alert-danger">
  <strong>Danger!</strong> Please you are name and identity are difference with what you used before,<br> please use correct information.
</div></center>';
	}
}

}

?>		
<script type="text/javascript">
function noNumbers(e)
{
var keynum
var keychar
var numcheck
if(window.event) // IE
{
keynum = e.keyCode
}
else if(e.which) // Netscape/Firefox/Opera
{
keynum = e.which
}
keychar = String.fromCharCode(keynum)
numcheck = /\d/
return !numcheck.test(keychar)
}
</script>	
<div class="se-pre-con"></div>
					<div class="row"  >
						
								<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" >
							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Firstname</label>
								<input type="text" class="form-control" name="f_name"  onkeypress="return noNumbers(event)">
								</div>
								<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<label>Lastname</label>
								<input class="form-control" type="text" name="l_name"  onkeypress="return noNumbers(event)">
							</div>

							<!--form Here are hidden inputbox for data will go in database automatically-->
							<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								
								<input type="hidden" class="form-control" name="reg_date" value="<?php echo date('Y-m-d')?>">
							</div>
					<div class=" input-field col-lg-12 col-md-12 col-sm-12">
								<input type="hidden" class="form-control" name="startin_intake"  >
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<input class="form-control" type="hidden" name="reg_id" >
							</div>
							<!--until here-->
							
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Gender</label>
								<div class="form-control">
								Male
								<input type="radio" class="radio-inline"  type="radio" name="sex" value="Male" >
								Female
								<input type="radio" class="radio-inline" type="radio" name="sex" value="Female" >
							</div>
						</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
							<label  >Birthdate</label>
								<div class="input-group date " >
  								<input type="text" class="form-control" name="birthdate" id="datepicker"   placeholder="dd/mm/yy" >
  								<span class="input-group-addon " ><i class="glyphicon glyphicon-calendar"  ></i></span></td>
							</div>
						</div>

							<div class="input-field col-lg-12 col-md-12 col-sm-12">
									<label>Telephone</label>
  								<input class="form-control" type="text" name="tel"  onKeyPress="return isNumberKey(event)" maxlength="10">
  							</div>
  								<div class="input-field col-lg-12 col-md-12 col-sm-12">
  								<label>Email</label>
  								<input class="form-control" type="email" name="email"  >
								</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>National ID</label>
								<input class="form-control" type="text" name="ID" onKeyPress="return isNumberKey(event)" maxlength="16">
							</div>
							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<label>Secondary section</label>
								
								<select class="form-control" name="sec_option">
									<option></option>
									<option>Computer science</option>
									<option>Tourism</option>
									<option>Constraction</option>
									<option>Accountancy</option>
									<option>Mechanics Automobile</option>

								</select>
							</div>
							
							<div class="input-field col-lg-12 col-md-12 col-sm-12"> 
								<table class="" style=" border-color: white; margin: auto; ">
									<thead>
									<tbody>
								<tr>
								<td ><label>Guardian Name</label></td>
								<td ><label>Guardian Number</label></td>
							</tr>
								<tr>
								<td><input class="form-control" type="text" name="guardian_name"  onkeypress="return noNumbers(event)" ></td>
						<td><input class="form-control" type="text" name="guardian_tel"  onKeyPress="return isNumberKey(event)" maxlength="10"></td>
							</tr>
								</td>
								</tr>
								
							</div>

							<div class="input-field col-lg-12 col-md-12 col-sm-12">
								
								<tr>
								<td ><label>Father's name</label></td>
								<td colspan="4"><label>Mother's name</label></td>
							</tr>
								<tr>
								<td><input class="form-control" type="text" name="fathername"   onkeypress="return noNumbers(event)" ></td>
								<td><input class="form-control" type="text" name="mothername"  onkeypress="return noNumbers(event)"></td>
							</tr>
								</td>
								</tr>
							</div>
							</tbody>
							</thead>
						</table>

							<div class=" input-field col-lg-12 col-md-12 col-sm-12" >
								<div class="form-group">
								<label >Department</label>
								
								<select name="dept_id" class="form-control index" id="dept_id" onchange="getId2(this.value);"  >

                				<option  selected="selected" ></option>
                					//populate value using php
                					<?php
                					include('connect.php');
                					
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
							</div>
								<div class=" input-field col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
									<label>Level </label>
								<select name="level_id" class="form-control level" id="LevelList" onchange="getId(this.value);" >
								
									<option  selected="selected"></option>
								</select>
							</div>
						</div>
							    <div class=" input-field col-lg-12 col-md-12 col-sm-12">
							    	<div class="form-group">
								<label>Program </label>
								<select name="program_id" class="form-control program" id="programList" >
									<option selected="selected"></option>

								</select>
							</div>
						</div>
							   <div class=" input-field col-lg-12 col-md-12 col-sm-12">
							   	<div class="form-group">
								<label>Branch </label>
							
									<select name="branch" class="form-control">
									<option></option>
									<option>Karongi</option>
									<option>Kigali</option>
								</select>
							</div>
						</div>
						<div class=" input-field col-lg-12 col-md-12 col-sm-12">
						<div class="form-group">
							<label>Intake </label>
									<select name="intake" class="form-control">
										<option></option>
										<?php
                					include('connect.php');
                					
                    				$query = "SELECT * FROM intake_table where intake_status='ON'";
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
						</div>
					</div>
						<div class="input-field col-lg-12 col-md-12 col-sm-12">
								<button class="btn btn-default"  name="submit" id="button" >Submit</button>
								<button class="btn btn-default  " name="resete">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<a id="back2Top" title="Back to top" href="#">&#10148;</a>
		</div>
		</form>
	
	</body>
	</html>
	<script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
    						
   <script>
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
	
	<script type="text/javascript">
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat:'dd/m/yy'});
    //$( "#datepicker2" ).datepicker({dateFormat:'yy-mm-dd'});
   
  } );

  </script>
 <?php
  $stoday=date('dd/mm/yy');
  ?>
<script>
	function validateform(){
			var tday="<?=$stoday?>";
			var f_name=document.students.f_name.value;
			var l_name=document.students.l_name.value;
			var sex=document.students.sex.value;
			var birthdate=document.students.birthdate.value;
			var email=document.students.email.value;
			var tel=document.students.tel.value;
			var guardian_name=document.students.guardian_name.value;
			var guardian_tel=document.students.guardian_tel.value;
			var fathername=document.students.fathername.value;
			var mothername=document.students.mothername.value;
			var dept_id=document.students.dept_id.value;
			var program_id=document.students.program_id.value;
			var level_id=document.students.level_id.value;
			var intake=document.students.intake.value;
			var ID=document.students.ID.value;
			var id2=ID.substr(5,1);
			var id3=ID.substr(5,1);
			var branch=document.students.branch.value;
			var sec_option=document.students.sec_option.value;
			var id1=ID.substr(0,1);
			
		    var phone=tel.substr(0,3);
		    var phone2=guardian_tel.substr(0,3);
			var letter=/^[A-Za-z". "]+$/;
			var number=/^[0-9" "]+$/;
			//var numberseat=/^[1-32" "]+$/;


			if (f_name=="") {
				alert("Enter Your first name");
				return false;
			}
			if (!f_name.match(letter)) {
				alert("Only characters allowed for name");
				return false;
			}
			if (l_name=="") {
				alert("Enter Your last name");
				return false;
			}
			if (sex=="") {
				alert("Please select Genger if you're Male or Female");
				return false;
			}
			
			if (birthdate=="" ) {
				alert("Please select Birth date carefully");
				return false;
			}
			if (tday<birthdate+18) {
			alert("Invalid Birth Date");
			return false;
				}
			if (tel=="") {
				alert("Please enter your phone number");
				return false;
			}
			if (!tel.match(number)) {
				alert("Only number allowed for Telephone");
				return false;
			}
			if (phone=="078" || phone=="072" || phone=="073"){
	
			}else{
			alert("Invalid phone format ");
			return false;
			}
			if (email=="") {
				alert("Please enter your email contact");
				return false;
			}
			if(ID==""){
			alert("Enter national ID");
			return false;
			}

			if(id1!=1){
			alert("The id number must start with 1");
			return false;
			}
			if (ID.length!=16) {
				alert( "ID number must contain at least 16 digit");
				return false;
			}
			if(id2!=7){
				while(sex=="Female"){
				alert("This is not Women id please");
				return false;
				}}
			if(id3!=8){
				while(sex=="Male"){
				alert("This is not man id please");
				return false;
				}}
			
			if(sec_option==""){
			alert("Write you're Secondary school section");
			return false;
			}
			if (!sec_option.match(letter)) {
				alert("Only characters allowed for section");
				return false;
			}
			if (guardian_name=="") {
				alert("Please enter you're guardian name");
				return false;
			}
			
			if (guardian_tel=="") {
				alert("Please enter you're guardian Telephone");
				return false;
			}
			if (!guardian_tel.match(number)) {
				alert("Only number allowed for Telephone");
				return false;
			}
			if (phone2=="078" || phone2=="072" || phone2=="073"){
	
			}else{
			alert("Guardian Invalid phone format ");
			return false;
			}
			if (fathername=="") {
				alert("Please enter your father name");
				return false;
			}
			if (!fathername.match(letter)) {
				alert("Only characters allowed for father name");
				return false;
			}
			if (mothername=="") {
				alert("Please enter your mother name");
				return false;
			}
			if (!mothername.match(letter)) {
				alert("Only characters allowed for mother name");
				return false;
			}
			
			if (dept_id=="") {
				alert("Please select your department");
				return false;
			}
			
			if (level_id=="") {
				alert("Please select level you reach on");
				return false;
			}
			
			if (level_id=="select level") {
				alert("Please select level you reach on");
				return false;
			}
			if (program_id=="") {
				alert("Please select program you wish");
				return false;
			}

			if (program_id=="select program") {
				alert("Please select program you wish");
				return false;
			}
			if (branch=="") {
				alert("Please select your branch want to join");
				return false;
			}
		
			if (intake=="") {
				alert("Please select intake");
				return false;
			}
			
			}
		</script>
		<script  type="text/javascript">
	function isNumberKey(evt){
		
		var charCode=(evt.which) ? evt.which : event.keyCode
		if(charCode > 31 &&(charCode<48 || charCode > 57))
			return false;
		return true;

	}
</script>

		<footer class="footer-basic-centered">
			<?php
			include('footer.php');
			?>
			</footer>
