<?php
include './zhongwen.php';
    $jieshao=$_POST['jieshao'];
    $price=$_POST['price'];
    $number=$_POST['number'];
    $img=$_POST['img'];
    $thisid=$_POST['thisid'];
    $sql=mysqli_connect('127.0.0.1','root','root','casio');
    $zhen="INSERT INTO `cart` VALUES(null,'$jieshao','$price','$number','$img','$thisid')";
    $query=mysqli_query($sql,$zhen);
    if($query){
        $arr=array("colu"=>1);
        print_r(json_encode($arr));
    }else{
        $arr=array("colu"=>0);
        print_r(json_encode($arr));
    }
?>