<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/15
 * Time: 14:51
 */

//删除内容

include_once "public.php";
$id=$_REQUEST['id'];
$sql="delete from onesql.show WHERE id=$id";
$result=$db->query($sql);
if ($result){
    $sess="删除成功";
}else{
    $sess="删除失败";
}
$src="glContent.php";
include_once "tiaozhuan.html";