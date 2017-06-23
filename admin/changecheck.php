<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 10:14
 */

include_once 'public.php';
session_start();
$user=$_REQUEST['user'];
$youxiang=$_REQUEST['youxiang'];
$sex=$_REQUEST['sex'];
$sql="update peng set youxiang='$youxiang',sex='$sex' WHERE zhanghao='$user'";
$result=$db->query($sql);
if($result){
    $sess='信息修改成功';
    $src='changename.php';
}
include 'tiaozhuan.html';





