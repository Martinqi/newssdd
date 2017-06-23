<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 10:07
 */

session_start();
include_once "public.php";
$url=$_SESSION['user'];
$sql="select * from peng WHERE zhanghao='$url'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
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
<form action="changeonecheck.php">
    旧密码：<input name="oldpass" type="password" value="" style="margin-left: 15px"><br>
    新密码：<input name="newpassq" type="password" value="" style="margin-left: 15px"><br>
    确认密码：<input  name="newpassh" type="password" value="">
    <button style="display: block">提交</button>
</form>
</body>
</html>
