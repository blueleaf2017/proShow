<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>项目详情</title>
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    <script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#table").dataTable();
        });
    </script>
</head>
<body>
<a href='login.html'>管理员登陆</a>
<h2 align='center'>项目详情展示</h2>
<table id="table" class="table">
    <thead>
    <tr>
        <td>项目序号</td>
        <th>项目名称</th>
        <th>计划设备数</th>
        <th>目标产量</th>
        <th>项目状态</th>
        <th>项目开始时间</th>
        <th>预计完成时间</th>
        <th>地区</th>
        <th>操作</th>
    </tr>
    </thead>
<?php
require_once 'mysql.class.php';
header("content-type:text/html; charset=utf-8");
$result=mysqli_query($conn,"SELECT id,proName,totalP*percentP/(singleP*usedTime)AS plan,totalP,stage,startTime,endTime,area FROM test.project");
while($row=mysqli_fetch_array($result)){
    ?>
   <tbody>
   <tr>
       <td><?php echo $row['id'] ?></td>
       <td><?php echo $row['proName'] ?></td>
       <td><?php echo floor($row['plan']) ?></td>
       <td><?php echo $row['totalP'] ?></td>
       <td><?php echo $row['stage'] ?></td>
       <td><?php echo $row['startTime'] ?></td>
       <td><?php echo $row['endTime'] ?></td>
       <td><?php echo $row['area'] ?></td>
       <td><a href="del.php?userId=<?php echo $row['id'] ?>">删除</a></td>
   </tr>
   </tbody>
<?php
}
mysqli_close($conn);
?>
    </table>
</body>
</html>