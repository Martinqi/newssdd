<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/8
 * Time: 23:33
 */

include "public.php";
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$passtwo=$_REQUEST['passtwo'];
$sql="select zhanghao from peng WHERE zhanghao='$user'";
$result=$db->query($sql);
$row=$result->fetch_all(MYSQLI_ASSOC);

if ($pass!=$passtwo){
    $sess="两次密码不一致，注册失败";
    $src="zhuce.html";
    include("tiaozhuan.html");
    exit;
}
if($row){
    $sess="用户名已存在，请重新注册";
    $src="zhuce.html";
    include("tiaozhuan.html");
    exit;
}
$sql="insert into peng (zhanghao,pass) VALUES ('$user','$pass')";
$db->query("set names utf8");
$result=$db->query($sql);

if($result){
    $sess="注册成功,立即登录";
    $src="index.html";
    include("tiaozhuan.html");

}else{
    $sess="注册失败";
    $src="zhuce.html";
    include("tiaozhuan.html");
}