<?php
$userId = $_GET['userId'];

include 'mysql.class.php';
include_once 'common.func.php';

$sql = "delete from project where id='".$userId."'";

mysqli_query($conn,$sql);

$mark  = mysqli_affected_rows($conn);//����Ӱ������

if($mark>0){
    alertMes("ɾ���ɹ�","show.php");
}else{
    alertMes("����ʧ��","show.php");
}

mysql_close($conn);