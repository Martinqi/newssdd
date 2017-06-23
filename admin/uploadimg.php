<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 22:31
 */

$file=$_FILES['img'];
$path='../imgupload';
if(!file_exists($path)){
    mkdir($path);
}
$name=explode('.',$file['name']);
$name[0]=time();
$namenew=$name[0].".".$name[1];
if(is_uploaded_file($file['tmp_name'])){
    $aa=move_uploaded_file($file['tmp_name'],$path.'/'.$namenew);
    if($aa){
        echo "'sqld.duapp.com/imgupload'.'/'.$namenew";
    }
};
