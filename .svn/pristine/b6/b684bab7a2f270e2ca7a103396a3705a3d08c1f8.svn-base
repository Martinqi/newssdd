<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/16
 * Time: 9:00
 */
include_once "public.php";
$id=$_REQUEST['id'];
$sql="select * from position WHERE id=$id";
$row=$db->query($sql)->fetch_assoc();
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
<style>
    input{
        width: 200px;
        height:23px;
        background: #afd9ee;
        border: 0;
        border-radius: 5px;
    }
    button{
        border: 0;
        font-size: 20px;
        font-family: "宋体";
        color: #fff;
        border-radius: 50%;
        background: #00a8ff;
        text-align: center;
        font-weight: bold;
    }
</style>
<body>
<form action="editPositioninfo.php">
    <p>修改推荐位</p>
   <input type="hidden" name="id" value="<?php echo $row['id']?>">
    <input type="text" name="name" value="<?php echo $row['name']?>">
    <button>&gt;</button>
</form>
</body>
</html>      