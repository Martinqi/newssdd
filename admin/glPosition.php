<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/15
 * Time: 18:34
 */
include_once "../lib/function.php";
include_once "public.php";
$obj=new position();
$obj->position($db,'position');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>推荐位管理</p>
<table style="text-align: center;" cellspacing="0"  border="1">
    <tr>
        <th>id</th>
        <th>名称</th>
        <th>操作</th>
    </tr>
    <?php echo $obj->str?>
</table>
</body>
</html>  