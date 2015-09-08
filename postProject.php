<?php
include_once 'common.func.php';
include_once 'mysql.class.php';
$pro_name=$_POST['proName'];
$pro_totalP=$_POST['totalP'];
$pro_percent=$_POST['percentP'];
$pro_singleP=$_POST['singleP'];
$pro_usedTime=$_POST['usedTime'];
$pro_stage=$_POST['stage'];
$pro_startTime=$_POST['startTime'];
$pro_endTime=$_POST['endTime'];
$pro_area=$_POST['area'];
$sql = "INSERT INTO test.project(proName,totalP,percentP,singleP,usedTime,stage,startTime,endTime,area) VALUES ('$pro_name','$pro_totalP','$pro_percent','$pro_singleP','$pro_usedTime','$pro_stage','$pro_startTime','$pro_endTime','$pro_area')";

if ($conn->query($sql) === TRUE) {
    alertMes("数据提交成功","detailDisplay.php");
} else {
    alertMes("数据提交失败，请重试","writePro.html");
}
$conn->close();
