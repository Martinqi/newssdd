<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/16
 * Time: 9:07
 */

include_once "public.php";
$name=$_REQUEST['name'];
$id=$_REQUEST['id'];
$sql="update position set name='$name' WHERE id=$id";
$result=$db->query($sql);
if ($result){
    $sess="修改成功";
    $src="glPosition.php";
}else{
    $sess="修改失败";
    $src="editPosition.php";
}

include "tiaozhuan.html";