
<?php
include('header_user.php');
ob_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="css2/typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>
    <style type="text/css">
.bs-example{
    font-family: sans-serif;
    position: relative;
    margin: 10px;
}
.typeahead, .tt-query, .tt-hint {
    border: 2px solid #CCCCCC;
    border-radius: 8px;
    font-size: 24px;
    height: 30px;
    line-height: 30px;
    outline: medium none;
    padding: 8px 12px;
    width: 396px;
}
.typeahead {
    background-color: #FFFFFF;
}
.typeahead:focus {
    border: 2px solid #0097CF;
}
.tt-query {
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
    color: #999999;
}
.tt-dropdown-menu {
    background-color: #FFFFFF;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    margin-top: 10px;
    padding: 8px 0;
    width: 422px;
}
.tt-suggestion {
    font-size: 12px;
    line-height: 24px;
    padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
    background-color: #0097CF;
    color: #FFFFFF;
}
.tt-suggestion p {
    margin: 0;
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color:none ;
}

.container {
  color: #333;
  text-align: center;
}

h1 {
  font-weight: normal;
}

li.s {
  display: inline-block;
  font-size: 1.5em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}
i#edite {
    color: green;
}
li span {
  display: block;
  font-size: 1.5rem;
}
</style>

  </head>
  <body>
    <form method="GET" action="Detail2.php">
      <div class="container">
      <div class="col-md-6 col-md-offset-3">
          <div class="input-group-btn">
              <span class="input-group-addon">
    <input type="text" name="typeahead" class="form-control typeahead tt-query " autocomplete="on" spellcheck="false" placeholder="Search" required>
      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button></span>
    </div><br>
        </div>
      </div>
        
  <div class="panel panel-default">
    <div class="panel-heading">
  <div class="panel panel-primary">
    <div class="panel-heading" ><strong>LIST OF STUDENTS<form action="selectStudent.php" method="GET" >
  </div></strong>
<span id="date"></span>
  <div class="wrapper">
    <div class="panel-body" style="max-width: 100%; min-width: 12px;"><br><br>
    	<div class="container">

<?php
$showRecordPerPage = 5;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL = "SELECT DISTINCT  students.reg_id,program.program_name,registration.branch, students.ID, students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name from students
INNER JOIN registration ON students.ID=registration.ID
INNER JOIN program ON program.program_id=registration.program_id
INNER JOIN departement ON registration.dept_id=departement.dept_id
INNER JOIN level ON registration.level_id=level.level_id where branch='Karongi' ORDER BY registration.reg_date DESC";
$allEmpResult = mysqli_query($conn, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT DISTINCT  registration.idreg,students.reg_id,program.program_name,registration.branch, students.ID, students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name from students
INNER JOIN registration ON students.ID=registration.ID
INNER JOIN program ON program.program_id=registration.program_id
INNER JOIN departement ON registration.dept_id=departement.dept_id
INNER JOIN level ON registration.level_id=level.level_id where branch='Karongi' ORDER BY registration.reg_date DESC LIMIT $startFrom, $showRecordPerPage";
$empResult = mysqli_query($conn, $empSQL);
?>
<table class="table " style="max-width: 94%; min-width: 12px;" >
<thead>
<tr>
        <th>N0</th>
        <th scope="cal">First Name</th>
        <th scope="cal">LastName</th>
        <th scope="cal">Reg Number</th>
        <th scope="cal">Identity</th>
        <th scope="cal">Email</th>
        <th scope="cal">Telephone</th>
        <th scope="cal">Gender</th>
        <th scope="cal">Department</th>
        <th scope="cal">Level</th>
        <th scope="cal">program</th>
        <th colspan="2" scope="cal">option</th>
      </tr>
</tr>
</thead>
<tbody>

<?php
$i=0;
while($row = mysqli_fetch_assoc($empResult)){
  $i++;
?>
<tr>
<td><?php echo $i;?></td>
        <td><?=$row['f_name'];?></td>
         <td><?=$row['l_name'];?></td>
         <td><b><?=strtoupper($row['reg_id']);?></b></td>
         <td><?=$row['ID'];?></td>
          <td><?=$row['email'];?></td>
          <td><?=$row['tel'];?></td>
          <td><?=$row['sex'];?></td>
          <td><?=$row['dept_name'];?></td>
          <td><?=$row['level_name'];?></td>
          <td><?=$row['program_name'];?></td>
<td><a href="updateStudent.php?ID=<?=$row['idreg'];?>"><i class="glyphicon glyphicon-edit" id="edite"></i></a>
  <button class="btn btn-default btn-info" ><a href="Detail3.php?ID=<?=$row['ID'];?>" style="color:white;"> Detail</a></button>
          </td>
</tr>
<?php } ?>
</tbody>
</table>
<nav aria-label="Page navigation">
<ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">First</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">Last</a>
</li>
<?php } ?>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<footer class="footer">
  <?php
 
  include('footer.php');
  ?>
</footer>