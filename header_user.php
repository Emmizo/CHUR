
<?php
date_default_timezone_set('Africa/Kigali');
include('connect.php');
ob_start();
session_start();
$user_id=isset($_SESSION['user_id'])? $_SESSION['user_id']:"";
$user_level=isset($_SESSION['user_level'])? $_SESSION['user_level']:"";
if (isset($_SESSION['user_id'])) {
    $user_id=$_SESSION['user_id'];
}
else{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="cssform/style.css">
  <title>Christian University of Rwanda</title>
  <style type="text/css">
  /* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}
    .footer {
    height: 30px;
  position:fixed;
   bottom:0;
   width:100%;
     /* Height of the footer */
   background:transparent;

}
    
   table{
    border: 1px 
    solid; 
    font: 9.5px verdana;
  }

  a{
    font: 12px verdana;
  }
  
  .button {
  display: inline-block;
  padding: 5px 15px;
  font-size: 9.5px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 10px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  </style>
</head>
<body><br><br><br>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
         <a class="navbar-brand" href="index.php">HOME</a>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role='button' aria-haspopup="true" aria-expanded="false" >STUDENT REGISTERED <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a href="selectStudent2.php">All Students </a></li>
              <li><a href="intakeReport2.php">Accomplish Attendance  </a></li>
              <li><a href="report2.php">Report According to date</a></li>
            </ul>
          </li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role='button' aria-haspopup="true" aria-expanded="false" >ACCEPTANCE LETTER SETTING <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a href="ChooseAdmission2.php">Accomplish Acceptance</a></li>
              
            </ul>
          </li>
          </ul>
          <?php
 $user_id=$_SESSION['user_id'];
$conn=mysqli_connect("localhost","root","","churAdmission") or die(mysqli_connect_error());
$qr="SELECT * FROM Admin where user_id ='$user_id'";
$result=mysqli_query($conn,$qr)or die(mysqli_error($con));
while ($row=mysqli_fetch_array($result)) {
  //$fullname=$row['fullname'];
  $user_username=$row['user_username'];
  $email=$row['user_email'];
  
?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>
            
          Welcome <?=$row['fullname'];?>

 </a></li>
 
        <li><a href="changepass_user.php"><span class="glyphicon glyphicon-edit"></span> Change Password</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   
   <?php
 }
 ?>

</body>
</html>

