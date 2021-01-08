<?php
include './zhongwen.php';
    $thisid=$_POST['id'];
    $sql=mysqli_connect('127.0.0.1','root','root','casio');
    $shan="DELETE FROM `cart` WHERE `thisid`='$thisid'";
    $query=mysqli_query($sql,$shan);
    if($query){
        $arr=array("colu"=>1);
        print_r(json_encode($arr));
    }else{
        $arr=array("colu"=>0);
        print_r(json_encode($arr));
    }
?>