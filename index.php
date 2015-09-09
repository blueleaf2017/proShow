<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>项目详情</title>
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once 'mysql.class.php';
header("content-type:text/html; charset=utf-8");
$result=mysqli_query($conn,"SELECT proName,totalP*percentP/(singleP*usedTime)AS plan,totalP,stage,startTime,endTime,area FROM test.project");
echo "<a href='login.html'>管理员登陆</a>";
echo "<h2 align='center'>项目详情展示</h2>";
echo "<table class='table'>
    <tr>
    <th>项目名称</th>
    <th>计划设备数</th>
    <th>目标产量</th>
    <th>项目状态</th>
    <th>启动时间</th>
    <th>完成时间</th>
    <th>地区</th>
    </tr>";

while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['proName']."</td>";
    echo "<td>".floor($row['plan'])."</td>";
    echo "<td>".$row['totalP']."</td>";
    echo "<td>".$row['stage']."</td>";
    echo "<td>".$row['startTime']."</td>";
    echo "<td>".$row['endTime']."</td>";
    echo "<td>".$row['area']."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>

</body>
</html>