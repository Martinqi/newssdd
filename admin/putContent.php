<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 16:47
 */
include_once "uploadimg.php";
include_once "public.php";
$id=$_REQUEST['id'];
$tid=$_REQUEST['tid'];
$title=$_REQUEST['title'];
$content=$_REQUEST['content'];
$img=$_REQUEST['imgurl'];
$sql="insert into onesql.show (title,content,thumb,cid,positionid) VALUES ('$title','$content','$img',$id,$tid)";
$result=$db->query($sql);
if($result){
    $sess="内容添加成功";
}else{
    $sess="内容添加失败";
}
$src='addContent.php';
include_once("tiaozhuan.html");
