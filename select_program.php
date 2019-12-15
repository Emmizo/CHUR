<?php
require 'connect.php';
if(isset($_POST)){
$dept_id=$_POST['dept_id'];
$result=array();
$rows=array();
$count=0;
$qr=mysqli_query($conn,"SELECT * FROM program INNER JOIN program_dept ON program.program_id=program_dept.program_id2 
WHERE program_dept.dept_id='$dept_id'")or die(mysqli_error($conn));
while($fetch=mysqli_fetch_array($qr)){
    $count +=1;
    $result['program_id']=$fetch['program_id'];
    $result['dept_id']=$fetch['dept_id'];
    $result['program_name']=$fetch['program_name'];
    array_push($rows,$result);
}
    $sms=array('Message'=>'success','status'=>1,'Data'=>$rows,'number'=>$count);
    echo json_encode($sms);
}

?>