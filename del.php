<?php
$userId = $_GET['userId'];

include 'mysql.class.php';
include_once 'common.func.php';

$sql = "delete from project where id='".$userId."'";

mysqli_query($conn,$sql);

$mark  = mysqli_affected_rows($conn);//返回影响行数

if($mark>0){
    alertMes("删除成功","show.php");
}else{
    alertMes("操作失败","show.php");
}

mysql_close($conn);