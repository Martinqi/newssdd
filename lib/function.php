<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 15:30
 */
include '../admin/public.php';
//添加栏目
class All{
    public $str;
    public function __construct(){
        $this->str='';
    }
    public function fun($db,$category,$pid,$n=0,$currpid=0){
        $sql="select * from $category WHERE pid=$pid";
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $str=str_repeat('-',$n);
            if ($currpid==$row['cid']){
                $this->str.="
            <option selected value='$currpid'>$str{$row['cname']}</option>  
            ";
            }else{
                $this->str.="
            <option value={$row['cid']}>$str{$row['cname']}</option>  
            ";
            }
            $this->fun($db,$category,$row['cid'],$n+2,$currpid);
        }
    }
}
//管理栏目
class guanli{
    public $str;
    public function __construct(){
        $this->str='';
    }
    public function fun($db,$category,$pid,$n=0){
        $sql="select * from $category WHERE pid=$pid";
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $str=str_repeat('-',$n);
            $this->str.="
            <tr>
                <td>{$row['cid']}</td>
                <td>$str{$row['cname']}</td>
                <td>{$row['pid']}</td>
                <td>
                <a href='../admin/changeCategory.php?cid={$row["cid"]}'>修改</a>
                <a href='../admin/delCategory.php?cid={$row["cid"]}'>删除</a>
               </td>
                
            </tr>     
            ";
            $this->fun($db,$category,$row['cid'],$n+2);
        }
    }
}
//管理推荐位
class position{
    public $str;
    public function __construct(){
        $this->str='';
    }
    public function position($db,$position){
        $sql="select * from $position";
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $this->str.="
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>
                <a href='../admin/editPosition.php?id={$row["id"]}'>修改</a>
                <a href='../admin/delPosition.php?id={$row["id"]}'>删除</a>
               </td> 
            </tr>     
            ";
        }
    }
}
