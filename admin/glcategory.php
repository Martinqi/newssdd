<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 20:41
 */
include_once "../lib/function.php";
$trees=new guanli();
$trees->fun($db,'category',0);


?>
<!--管理栏目页面-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    td{
        text-align: center;
    }
</style>
<body>
    <table cellpadding="0" cellspacing="0" border="1" align="center">
        <tr>
            <th>栏目id</th>
            <th>栏目名称</th>
            <th>上级栏目id</th>
            <th>操作</th>
        </tr>
        <?php echo $trees->str?>
    </table>
</body>
</html>