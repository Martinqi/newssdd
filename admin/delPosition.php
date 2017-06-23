<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/16
 * Time: 10:21
 */
include_once "public.php";
$id=$_REQUEST['id'];
$sql="delete from position WHERE id=$id";
$result=$db->query($sql);
if ($result){
    $sess="删除成功";
}else{
    $sess="删除失败";
}
$src="glPosition.php";
include_once "tiaozhuan.html";