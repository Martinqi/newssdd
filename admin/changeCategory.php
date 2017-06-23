<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 21:01
 */

//修改管理栏目
include_once "../lib/function.php";
include_once "public.php";
$id=$_REQUEST['cid'];
$sql="select * from category WHERE cid=$id";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$currpid=$row['pid'];
$obj=new All();
$obj->fun($db,'category',0,0,$currpid);

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
<form action="addcategoryinfo.php">
    <span>上级栏目：</span>
    <select name="id" id="">
        <option value="0">作为一级栏目</option>
        <?php echo $obj->str?>
    </select><br><br>
    <input type="hidden" name="pid" value="<?php echo $id?>">
    栏目内容:<input name="name" type="text" value="<?php echo $row['cname']?>" onautocomplete="off"><br>
    <button style="margin-top: 20px">提交</button>
</form>
</body>
</html>
