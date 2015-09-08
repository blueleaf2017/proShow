<!DOCTYPE html>
<html>
<head>
    <title>剩余设备查询</title>
<!--    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <!--<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">-->
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $( "#startTime").datepicker();
        });
    </script>
    <script>
        $(function() {
            $( "#endTime").datepicker();
        });
    </script>
</head>
<body>
<H2 align="center">剩余设备查询</H2>

        <form class="form-horizontal" role="form" method="post">

            <div class="form-group">
                <label for="city">区域选择</label>
                <label>
                    <select class="form-control" name="city">
                        <option>潮州</option>
                        <option>北京</option>
                        <option>广州</option>
                    </select>
                </label>

                <div class="form-group">
                <label for="ST" class="col-sm-2 control-label">开始时间</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="ST" id="ST">
                </div>
            </div>
                <div class="form-group">
                    <label for="ET" class="col-sm-2 control-label">结束时间</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ET" id="ET">
                    </div>
                </div>
                        <button type="submit" class="btn btn-default">提交得出结果：</button>
                <?php
                include_once 'mysql.class.php';
                $city=$_GET['city'];
                $st=$_GET['ST'];
                $et=$_GET['ET'];
                $result=mysqli_query($conn,"select totalP*percentP/(singleP*usedTime)AS plan from test.project where area='{$city}' and startTime<'{$st}' AND endTime>'{$et}'");
                $array=$result;
                foreach ($array as &$value)
                {
                    $sum+=$value;
                }
                echo $sum;
                $colum =mysqli_fetch_array($result);
                while($row=mysqli_fetch_array($result)) {

                }
                ?>
        </form>

</body>
</html>