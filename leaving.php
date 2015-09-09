<a href="detailDisplay.php">返回前一页</a>
<br/>
剩余设备：
<?php
include_once 'mysql.class.php';
$machineT=$_POST['machineT'];
$city=$_POST['city'];
$st=$_POST['ST'];
$et=$_POST['ET'];
header("content-type:text/html; charset=utf-8");
$sql=mysqli_query($conn,"select floor(totalP*percentP/(singleP*usedTime))AS plan from test.project where area='$city' AND startTime<='$st' AND endTime>='$et'");
$sum=0;
while($row=mysqli_fetch_array($sql)){
    $a=array($row['plan']);
//    print_r($a);
    foreach($a as $result){
//        echo $result,'<br/>';
//        print_r($result);
       $sum=$sum+$result;
    }
//    print_r(floor($row['plan']));
}
echo $machineT-$sum;