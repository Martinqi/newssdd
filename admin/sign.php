<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/8
 * Time: 16:17
 */
include "public.php";
$verify=$_REQUEST['ppp'];
session_start();
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$sql="select zhanghao,pass from peng WHERE zhanghao='$user'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if(strtoupper($_SESSION['str'])!=strtoupper($verify)){
    $sess='验证码错误';
    $src='index.html';
    include('tiaozhuan.html');
    exit;
}

if ($row){
    if ($row['pass']==$pass){
        $_SESSION['user']=$user;
        $_SESSION['pass']=$pass;
//        setcookie('user',$user);
//        setcookie('pass',$pass);
        $sess='登陆成功';
        $src='admin.php';
        include "tiaozhuan.html";
    }else{
        $sess='登陆失败，密码错误';
        $src='index.html';
        include "tiaozhuan.html";
    }
}
else{
    $sess="用户名不存在,请您立即注册";
    $src="zhuce.html";
    include("tiaozhuan.html");
}

