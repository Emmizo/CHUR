<?php
include('connect.php');
    $key=$_GET['key'];
    $array = array();
   //$conn=mysqli_connect("localhost","root","","churAdmission");
    
    /*$query=mysqli_query($conn, "SELECT  registration.reg_id, students.ID, students.f_name,students.l_name,students.email,students.sex,students.tel,departement.dept_name,level.level_name from students
         INNER JOIN registration ON students.ID=registration.ID
         INNER JOIN departement ON registration.dept_id=departement.dept_id
         INNER JOIN program_dept
         INNER JOIN level ON registration.level_id=level.level_id WHERE ID,f_name,l_name like '%{$key}%'");*/
         $query=mysqli_query($conn, "select * from students where ID LIKE '%{$key}%' OR f_name LIKE '%{$key}%' OR l_name LIKE '%{$key}%' OR email LIKE '%{$key}%' OR tel LIKE '%{$key}%'");
          $query2=mysqli_query($conn, "select * from registration where ID LIKE '%{$key}%' OR dept_id LIKE '%{$key}%' OR level_id LIKE '%{$key}%' OR program_id LIKE '%{$key}%' OR tel LIKE '%{$key}%'");
         
    while($row=mysqli_fetch_assoc($query))
    {
    $array[] = $row['ID'];
     $array[] = $row['f_name'];
     $array[] = $row['l_name'];
     $array[] = $row['email'];
     $array[] = $row['tel'];
    }
    echo json_encode($array);
    //mysqli_close($conn);

?>