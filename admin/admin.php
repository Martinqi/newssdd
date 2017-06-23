<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/10
 * Time: 18:26
 */
session_start();
 $title="欢迎{$_SESSION['user']}登录后台管理系统";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理系统</title>
    <link rel="stylesheet" href="../static/css/admin.css">
    <link rel="stylesheet" href="../static/css/common.css">
    <script src="../static/js/jquery.min.js"></script>
    <script src="../static/js/admin.js"></script>
</head>
<body>
<div style="color: #fff;padding-left: 34px;box-sizing: border-box" class="top">
    <a style="float: left;color: #fff" href="../index.php">站点首页</a>
    <?php echo $title?>
    <p onclick="location.href='index.html'" style="height=20px;float: right;margin-right: 30px;margin-top: 10px">注销</p>
</div>

<div class="content">
    <div class="left">
        <ul>
            <li class="list">个人信息</li>
            <ul>
                <li><a href="change.php" target="change">个人信息修改</a></li>
                <li><a href="changeone.php" target="change">密码修改</a></li>
            </ul>
            <li class="list">内容管理</li>
                <ul>
                    <li><a href="addContent.php" target="change">添加内容</a></li>
                    <li><a href="glContent.php" target="change">管理内容</a></li>
                </ul>
            <li class="list">栏目管理</li>
            <ul>
                <li><a href="category.php" target="change">添加栏目</a></li>
                <li><a href="glcategory.php" target="change">管理栏目</a></li>
            </ul>
            <li class="list">推荐位管理</li>
            <ul>
                <li><a href="position.php" target="change">添加推荐位</a></li>
                <li><a href="glPosition.php" target="change">管理推荐位</a></li>
            </ul>
        </ul>
    </div>
    <iframe name="change" src="" frameborder="0"></iframe>
</div>
</body>
</html>
