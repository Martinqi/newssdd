<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 9:57
 */
include_once "public.php";
$name=$_REQUEST['name'];
$pid=$_REQUEST['pid'];
$newpid=$_REQUEST['id'];
$sql="select cname from category WHERE cname='$name'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if ($row){
    $sess="栏目名已存在";
}else{
    $sql="update category set cname='$name',pid=$newpid WHERE cid=$pid";
    $result=$db->query($sql);
    if ($result){
        $sess="修改成功";
    }else{
        $sess="修改失败";
    }
}
$src="glcategory.php";
include "tiaozhuan.html";