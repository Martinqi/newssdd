<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/15
 * Time: 14:51
 */
include_once "public.php";
session_start();
$id=$_REQUEST['id'];
$ids=$_SESSION['id']=$id;
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
    iframe{
        position: relative;
    }
    .box{
        position: absolute;
        right: 400px;
        top: 0;
        width: 150px;
        height: 150px;
    }
    .imgbox{
        width: 100%;
        height: 120px;
        border: 1px solid #afd9ee;
        position: relative;
    }
    .imgbox img{
        width: 100%;
    }
    .progress{
        width: 0;
        height: 10px;
        background: #ff6700;
        position: absolute;
        left: 0;
        bottom: 0;
    }
</style>
<body>
<form action="putEditContent.php">
    <p>修改内容：</p>
    <p>标题:</p>
    <input type="text" name="title" value="">
    <p>内容:</p>
    <textarea name="content"  cols="120" rows="15">
    </textarea><br>
    <div class="box">
        <p>添加图片：</p>
        <input type="file" name="file" id="thumb">
        <div class="imgbox">
            <input type="hidden" name="imgurl" id="form">
            <img class="img" src="" alt="">
            <div class="progress"></div>
        </div>
    </div>
    <?php
    $sql="select * from position";
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()):?>
        <label>
            <input type="radio" name="tid" value="<?php echo $row['id']?>">
            <?php echo $row['name']?>
        </label>
    <?php endwhile;?>
    <button style="margin-top: 20px">提交</button>
</form>
</body>
</html>

