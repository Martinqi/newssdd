<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/10
 * Time: 19:29
 */
session_start();
include_once "public.php";
$url=$_SESSION['user'];
$sql="select * from peng WHERE zhanghao='$url'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
//var_dump($row);
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
<form action="changecheck.php">
    用户名： <input name="user" type="text" readonly value="<?php echo $row['zhanghao']?>"><br>
    邮箱： <input name="youxiang" style="margin-left: 15px" type="text" value="<?php echo $row['youxiang']?>"><br>
        <?php if ($row['sex']=='男'):?>
    <lable>
            性别：男<input type="radio" checked value="男" name="sex">
            女<input type="radio" value="女" name="sex">
    </lable>
        <?php elseif ($row['sex']=='女'):?>
    <lable>
        性别：男<input type="radio"  value="男" name="sex">
        女<input type="radio" checked value="女" name="sex">
    </lable>

        <?php endif;?>

    <button style="display: block">提交</button>
</form>
</body>
</html>


