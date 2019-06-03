
<?php
include('head_admin.php');
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <title>Christian University of Rwanda</title>
          <link rel="stylesheet" href="cssform/style.css">
  <title>CHUR</title>
  <style type="text/css">
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
  table{
    border: 1px 
    solid; 
    font: 8.5px verdana;
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
 /*Scroll to top when arrow up clicked END*/
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
<!--for search code -->

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
  background-color: ;
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

li span {
  display: block;
  font-size: 1.5rem;
}
</style>

  </head>
  <body>
    <form method="GET" action="Detail.php">
    <div class="row">
      <div class="container">
      <div class=".col-md-6">
          <center>
        
          <div class="input-group-btn">
            <span class="input-group-addon">
    <input type="text" name="typeahead" class="form-control typeahead tt-query " autocomplete="off" spellcheck="false" placeholder="Search" required>
      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button></span>
   
  </div>
  <h5 id="head">Countdown to print all data:</h5>
  <ul>
    <li class="s"><span id="days"></span>days</li>
    <li class="s"><span id="hours"></span>Hours</li>
    <li class="s"><span id="minutes"></span>Minutes</li>
    <li class="s"><span id="seconds"></span>Seconds</li>
  </ul>
</div>
</center>
 </div>
  </div>
  </div>
  </form>
  </div>
  <script type="text/javascript">
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Sep 30, 2019 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

   document.getElementById('days').innerText = Math.floor(distance / (day)),
   document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
   document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
   document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

      
      //do something later when date is reached
      if (distance < 0) {

       //clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      }

    }, second)
  </script>

  
</head>
<br>
<body  width="10" height="100" align="center">
  <div class="se-pre-con"></div>
<center>
  <div class="panel panel-default">
    <div class="panel-heading">
  <div class="panel panel-primary">
    <div class="panel-heading"><strong>LIST OF STUDENTS<form action="selectStudent.php" method="GET" >
  </div></strong>
<span id="date"></span>
  <div class="wrapper">
    <div class="panel-body"><br><br>
    	<div class="container">
  
    	<div id="print_content" >
  <table class="table " style="max-width: 1200px; min-width: 12px;" >
    <thead>
      
      <tr style="background-color: #cae8ea">
        <th>N0</th>
      <th>First Name</th>
        <th>LastName</th>
        <th>Reg Number</th>
        <th>Identity</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Gender</th>
        <th>Department</th>
        <th>Level</th>
        <th>program</th>
        <th colspan="2">option</th>
      </tr>
    </thead>
    <?php
    $conn=mysqli_connect("localhost","root","","churAdmission");
        $query="SELECT DISTINCT  registration.reg_id,program.program_name,registration.branch, students.ID, students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name from students
         INNER JOIN registration ON students.ID=registration.ID
         INNER JOIN program ON program.program_id=registration.program_id
         INNER JOIN departement ON registration.dept_id=departement.dept_id
         INNER JOIN program_dept
         INNER JOIN level ON registration.level_id=level.level_id where branch='Kigali'ORDER BY registration.reg_date desc";
        $results=mysqli_query($conn,$query) or die(mysqli_error($conn));
        $i=0;
        while ($row=mysqli_fetch_assoc($results)) {
         //$number=mysqli_num_rows($results);
          $i++;
    ?>
    <tbody>
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
<td><a href="updateStudent.php?ID=<?=$row['ID'];?>"><i class="glyphicon glyphicon-edit"></i></a>
  <button class="btn btn-default" style="background-color: green;"><a href="Detail3.php?ID=<?=$row['ID'];?>" style="color:white;"> Detail</a></button>
          </td>
    </tr></tbody>
<?php
  }
?>
    
</ul></ul>
</table>
</div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
</div></div></form></strong>
</div></div></div>
</div></div></div>
</div></div></div>
</div>
</center>
 <footer class="footer">
      <?php
  include('footer.php');
  ?>
 </footer>
</body>
<script type="text/javascript" src="/path/to/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/path/to/jquery.tableexport.js"></script>
<link href="js/tableexport.css" rel="stylesheet">
<script src="//code.jquery.com/js/jquery.min.js"></script>
<script src="js/FileSaver.js"></script>
<script src="js/tableexport.js"></script>
<script src="js/Blob.js"></script>
<script src="js/Export2Excel.js"></script>
<script src="js/xlsx.core.js"></script>
<script src="js/xlsx.js"></script>
<script src="js/xls.js"></script>
<script src="js/xls.core.js"></script>

<script src="js/xls.core.min.js"></script>
<style type="text/css">
  
  /* [String] column separator, [default: ","] */
.top,
.head {
    caption-side: top;
}

.bottom {
    caption-side: bottom;
}
</style>
<script type="text/javascript">
$("table").tableExport({
    bootstrap: true
});

</script>
<script type="text/javascript">
/*$("table").tableExport({

    separator: ",",                         // [String] column separator, [default: ","]
    headings: true,                         // [Boolean], display table headings (th elements) in the first row, [default: true]
    buttonContent: "Export",                // [String], text/html to display in the export button, [default: "Export file"]
    addClass: "",                           // [String], additional button classes to add, [default: ""]
    defaultClass: "btn",                    // [String], the default button class, [default: "btn"]
    defaultTheme: "btn-default",            // [String], the default button theme, [default: "btn-default"]
    type: "csv",                            // [xlsx, csv, txt], type of file, [default: "csv"]
    fileName: "export",                     // [id, name, String], filename for the downloaded file, [default: "export"]
    position: "bottom",                     // [top, bottom], position of the caption element relative to table, [default: "bottom"]
    stripQuotes: true  
    bootstrap: true                     // [Boolean], remove containing double quotes (.txt files ONLY), [default: true]
});*/
</script>
</html>


