<?php
include './zhongwen.php';
    $number=$_POST['number'];
    $password=$_POST['password'];
    $sql=mysqli_connect('127.0.0.1','root','root','casio');
    $zhen="INSERT INTO `login` VALUES(null,'$number','$password')";
    $query=mysqli_query($sql,$zhen);
    if($query){
        $arr=array("colu"=>1);
        print_r(json_encode($arr));
    }else{
        $arr=array("colu"=>0);
        print_r(json_encode($arr));
    }
?>