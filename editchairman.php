
<?php
include('head_admin.php');
include('connect.php');
$chairman_id=$_GET['chairman_id'];
  $con=mysqli_connect("localhost","root","","churadmission");
  $query="SELECT *FROM chairman WHERE chairman_id='$chairman_id'";
  $result=mysqli_query($con,$query) or die(mysqli_error($con));
  while ($rows=mysqli_fetch_assoc($result)) {
    $full_name=$rows['full_name'];
    $post=$rows['post'];
    
    }
  ?>
<?php
if (isset($_POST['update'])) {
  $full_name=$_POST['full_name'];
  $post=$_POST['post'];
  
  $query2="UPDATE chairman SET full_name='$full_name',post='$post' WHERE chairman_id='$chairman_id'";
  $result=mysqli_query($con,$query2)or die(mysqli_error($con));
  header("location:./chairman.php");
  }
  ?>
<html>
<head>
<title>Christian university of Rwanda</title>
  <script>
  //paste this code under head tag or in a seperate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-body">
          <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <title>CHUR</title>         
          <link rel="stylesheet" href="cssform/style.css">  
          <style type="text/css">
            .error{
              color: red;
              
              font-style: italic;
              font-size: 12px;
            }
          </style>
        </head>
        <script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
            <div class="panel panel-primary">
          <div class="panel-heading"><center><strong>Chairman update form</center></div></strong>
            <div class="panel-body">
               <div class="se-pre-con"></div>
              <form class="form-horizontal" role="form" action="" name="students" onsubmit="return validateform()" method="POST">
          <div class="row"  >
            <div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12" style="width: 412px;">

              
              <div class=" input-field col-lg-12 col-md-12 col-sm-12" >
                <label>Chairman name:</label>
                <input type="text" class="form-control" name="full_name" value="<?php echo $full_name;?>">
              </div>
              <div class="input-field col-lg-12 col-md-12 col-sm-12">
                <label>Post:</label>
                <input class="form-control" type="text" name="post" value="<?php echo $post;?>">
                <br>
              </div>
                <div class="input-field col-lg-12 col-md-12 col-sm-12">
                <!--<button class="btn btn-warning float-right " name="resete">CANCEL</button>-->
                <button class="btn btn-default" name="update" id="button">Update</button>
              </div>
          </div>
            </div>
          </div>
        </div></div></div></div></div></div></div>
        </div>
      </form>
    </div>
  </div>
</div>
<footer class="footer">
<?php
include('footer.php');
?>
</footer>

</body>
</html>