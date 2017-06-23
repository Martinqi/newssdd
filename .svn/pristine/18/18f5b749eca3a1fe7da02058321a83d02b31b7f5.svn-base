<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 18:13
 */

include_once "public.php";
$name=$_REQUEST['name'];
$pid=$_REQUEST['id'];
$sql="select * from category WHERE cname='$name'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if ($row){
    $sess = "栏目已存在，添加失败";
}else{
    $sql = "insert into category (cname,pid) VALUES ('$name',$pid)";
        $result = $db->query($sql);
        if ($result) {
            $sess = "添加栏目成功";
        }
}
$src="category.php";
include "tiaozhuan.html";
