<?php
require 'connect.php';
if(isset($_POST)){
$dept_id=$_POST['dept_id'];
$result=array();
$rows=array();
$count=0;
$qr=mysqli_query($conn,"SELECT * FROM level INNER JOIN level_dept ON level.level_id=level_dept.level_id2 
WHERE level_dept.dept_id='$dept_id'")or die(mysqli_error($conn));
while($fetch=mysqli_fetch_array($qr)){
    $count +=1;
    $result['level_id']=$fetch['level_id'];
    $result['dept_id']=$fetch['dept_id'];
    $result['level_name']=$fetch['level_name'];
    array_push($rows,$result);
}
    $sms=array('Message'=>'success','status'=>1,'Data'=>$rows,'number'=>$count);
    echo json_encode($sms);
}

?>