
<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title> Christian University of Rwanda</title>
  <link rel ="stylesheet" href="css/responsive.css">
  <style type="text/css">

  /* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
/*.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}*/
.footer {
    height: 30px;
  position:fixed;
   bottom:0;
   width:100%;
     /* Height of the footer */
   background:transparent;
   z-index:999;

}
   table{
    border: 1px 
    solid; 
    font: 9.5px verdana;
  }
  
  .button {
  display: inline-block;
  padding: 5px 15px;
  font-size: 15.5px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: black;
  border: none;
  border-radius: 0px;
  box-shadow: 0 9px #999;
}
a {
    color: white!important;
    font-weight: bold;
}
a:hover{
color:black!important;
}
a#home:hover{
  color:white!important;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  </style>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="picture/pre.jpj"> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel ="stylesheet" href="css/responsive.css">
</head>
<body background="picture/wallpapers.jpg"><br><br><br>
  <nav class="navbar navbar-fixed-top" style="background-color: #428bca;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.php" id="home" style="color:white; font-weight:bold;">HOME</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#garrely.php">Garelly</a></li>
          <li><a href="#aboutus.php">About us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> </a></li>

        </ul>
      </div>
    </div>
  </nav>
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

</html>
