<?php
require_once 'common.func.php';
require_once 'mysql.class.php';
$username=$_POST['username'];
$password=$_POST['password'];
if($username == "")
{
    echo "<script type='text/javascript'>alert('����д�û���');location='login.html';
			</script>";
}
elseif($password == "")
{

    echo "<script type='text/javascript'>alert('����д����');location='login.html';</script>";
}
else
{
    $sql=mysqli_query($conn,"select * from test.useradmin where username='{$username}' and password='{$password}'");
    $colum =mysqli_fetch_array($sql);
    if(($colum['username'] == $username) && ($colum['password'] == $password))
    {
        alertMes("��½�ɹ�","writePro.html");
    }
    else
        alertMes("��½ʧ�ܣ����µ�½","login.html");
}