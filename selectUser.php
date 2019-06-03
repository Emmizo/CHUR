<?php
include('head_admin.php');
include('connect.php');

$qr="SELECT * FROM admin where user_id order by user_id desc";
$result=mysqli_query($conn,$qr)or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script>
  //paste this code under head tag or in a seperate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
</head>
<body>
  <div class="se-pre-con"></div>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-body">
  <div class="panel panel-primary" style="max-width: 900px; margin: auto;">
    <div class="panel-heading"><center><strong>LIST OF USERS</strong></center></div>
      
  <table class="table table-hover" >
    <thead>
      <tr style="background-color: #cae8ea">
      <th>Full Name</th>
        <th style="display: none;">User name</th>
        <th style="display: none;">password</th>
        <th>email</th>
        <th>user level</th>
        <th>Option</th>
    	</tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
	$fullname=$rows['fullname'];
	$username=$rows['user_username'];
	$password=$rows['user_password'];
	$user_email=$rows['user_email'];
	$user_level=$rows['user_level'];
?>
<tr>
<td><?=$fullname;?></td>
<td style="display: none;"><?=$username;?></td>
<td style="display: none;"><?=$password;?></td>
<td><?=$user_email;?></td>
<td><?=$user_level;?></td>
<td>
<?php echo "<button class='btn btn-default'><a href=\"updateUser.php?user_id=$rows[user_id]\" style='text-decoration:none;'>Edit</a> </button>| <button class='btn btn-default' style='background-color:red; color:black;'><a href=\"delete.php?user_id=$rows[user_id]\" onClick=\"return confirm('Are you sure you want to delete?')\" style='text-decoration:none;color:white;'>Delete</a></button></td>";?>
</td>
</tr>
<?php
}
?>
</thead></table></div></div></div></div></div></div>
</body>
</html>
<footer class="footer">
<?php
include('footer.php');
?>
</footer>