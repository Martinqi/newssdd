<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 10:18
 */
include_once 'public.php';
session_start();
$oldpass=$_REQUEST['oldpass'];
$newpassq=$_REQUEST['newpassq'];
$newpassh=$_REQUEST['newpassh'];
$url=$_SESSION['user'];
$sql="select pass from peng WHERE zhanghao='$url'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if ($row['pass']==$oldpass){
    if ($newpassq==$newpassh){
        $sql="update peng set pass='$newpassq' WHERE zhanghao='$url'";
        $result=$db->query($sql);
        if ($result){
            $sess='修改成功，请重新登陆';
            unset($_SESSION['user']);
            $src='index.html';
            include 'tiaozhuan.html';
        }
        else{
            $sess='修改失败，两次密码不一致';
            $src='changeone.php';
            include 'tiaozhuan.html';
        }
    }else{
        $sess='修改失败，原密码错误，请重新修改';
        $src='changeone.php';
        include 'tiaozhuan.html';
    }
}