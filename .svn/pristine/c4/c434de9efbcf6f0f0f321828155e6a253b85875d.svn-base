<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 21:02
 */

//删除管理页面栏目

include_once "public.php";
$cid=$_REQUEST['cid'];
$sql="select * from category";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
    var_dump($row);
    if ($row['pid']==$cid){
        $sess="删除失败，请先删除子栏目";
    }else{
        $sql="delete from category WHERE cid=$cid";
        $result=$db->query($sql);
        if ($result){
            $sess="删除成功";
        }else{
            $sess="删除失败";
        }
    }
}
$src="glcategory.php";
include "tiaozhuan.html";