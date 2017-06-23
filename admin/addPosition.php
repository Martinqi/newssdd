<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/15
 * Time: 18:16
 */

include_once "public.php";
$name=$_REQUEST['psi'];
$sql="insert into position (name) VALUES ('$name')";
$result=$db->query($sql);
if ($result){
    $sess="推荐位添加成功";
}else{
    $sess="推荐位已存在，添加失败";
}
$src="position.php";
include_once "tiaozhuan.html";