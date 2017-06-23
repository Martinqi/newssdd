<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/15
 * Time: 11:00
 */
include_once "public.php";
$id=$_REQUEST['id'];
$sql="select * from onesql.show WHERE cid=$id";
$result=$db->query($sql);
$row=$result->fetch_all(MYSQLI_ASSOC);
$arrjson=json_encode($row);
echo $arrjson;