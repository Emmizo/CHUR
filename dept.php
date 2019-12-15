<?php
require 'connect.php';
$result=array();
$rows=array();
$count=0;
$qr=mysqli_query($conn,"SELECT * FROM departement")or die(mysqli_error($conn));
while($fetch=mysqli_fetch_array($qr)){
    $count +=1;
    $result['dept_id']=$fetch['dept_id'];
    $result['dept_name']=$fetch['dept_name'];
    array_push($rows,$result);
}
    $sms=array('Message'=>'success','status'=>1,'Data'=>$rows,'number'=>$count);
    echo json_encode($sms);

?>