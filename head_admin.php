
<?php
date_default_timezone_set('Africa/Kigali');
include('connect.php');
ob_start();
session_start();
$user_id=isset($_SESSION['user_id'])? $_SESSION['user_id']:"";
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
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="cssform/style.css">
  <link rel ="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
 
  <title>Christian University of Rwanda</title>
  <style type="text/css">
body {
 height: 100%;
 position: relative;

  -webkit-print-color-adjust: exact !important;
}
.footer {
    height: 30px;
  position:fixed;
   bottom:0;
   width:100%;
     /* Height of the footer */
   background:transparent;
   z-index:999;

}.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
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

    
   table{
    border: 1px 
    solid; 
    font: 10px verdana;
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
  background-color: #4CAB50;
  border: none;
  border-radius: 10px;
  
}
.navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
    color: white;
    font-weight: bold;
}
#headere{
  color: white!important;
    font-weight: bold; 
    font-size:11px;
}
#headere:hover{
  color:black!important;
}
/* a {
    color: white!important;
    font-weight: bold;
}
a:hover{
color:black!important;
} */

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
/* .navbar-nav>li>.dropdown-menu {
  background: #5bc0de!important;
} */
  </style>
</head>
<body><br><br><br>
  <nav class="navbar  navbar-fixed-top" style="background-color: #428bca;">
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
            <a class="dropdown-toggle" data-toggle="dropdown" role='button' aria-haspopup="true" aria-expanded="false" id="headere">STUDENT REGISTERED <span class="caret"></span></a>
            <ul class="dropdown-menu bg-info" style="background-color: #5bc0de;" >
               <li><a href="selectStudent.php">All Students </a></li>
              <li><a href="intakeReport.php">Accomplish Attendance </a></li>
              <li><a href="report.php">Report According to date </a></li>
            </ul>
          </li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role='button' aria-haspopup="true" aria-expanded="false" id="headere" >ACCEPTANCE LETTER SETTING <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a href="ChooseAdmission.php">Accomplish Acceptance</a></li>
              <li><a href="updateMarch.php">Schudule Date Intake will start</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="headere">USER AND OTHERS SETTING<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="insertuser.php">Add new User </a></li>
              <li><a href="selectUser.php">View User</a></li>
              <li><a href="chairman.php">Chairman</a></li>
              <li><a href="payment.php">Payment structure</a></li>
              <li><a href="selectprogram_dept.php">Setting</a></li>
            </ul>
          </li>
        </ul>
          <?php
 $user_id=$_SESSION['user_id'];
//$conn=mysqli_connect("localhost","root","","churAdmission") or die(mysqli_connect_error());
$qr="SELECT * FROM Admin where user_id ='$user_id'";
$result=mysqli_query($conn,$qr)or die(mysqli_error($con));
while ($row=mysqli_fetch_array($result)) {
  //$fullname=$row['fullname'];
  $user_username=$row['user_username'];
  $email=$row['user_email'];
    
?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" id="headere" style="color:white; font-weight:bold;"><span class="glyphicon glyphicon-user"></span>
            
          Welcome <?=$row['fullname'];?>
          <?php
//session_start();
/*$counter_name = "counter.txt";
if (!file_exists($counter_name))
{
    $f = fopen($counter_name, "w");
    fwrite($f,"0"); fclose($f);
}
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
$counterVal++;
$f = fopen($counter_name, "w");
fwrite($f, $counterVal);
fclose($f);
echo "visitor number $counterVal";*/
?>

 </a></li>

        <li><a href="changepass_dm.php" id="headere"><span class="glyphicon glyphicon-edit"></span> Change Password</a></li>
          <li><a href="logout.php" id="headere"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
