<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 15:30
 */
include_once "../lib/function.php";
$trees=new All();
$trees->fun($db,'category',0);
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
<form action="addcategory.php">
<span>上级栏目：</span>
<select name="id" id="">
    <option value="0">作为一级栏目</option>
    <?php echo $trees->str?>
</select><br><br>
    栏目名称:<input name="name" type="text" onautocomplete="off"><br>
    <button style="margin-top: 20px">提交</button>
</form>
</body>
</html>
