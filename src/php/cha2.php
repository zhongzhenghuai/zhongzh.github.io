<?php
include './zhongwen.php';
    $sql=mysqli_connect('127.0.0.1','root','root','casio');
    $cha="SELECT*FROM cart";
    $query=mysqli_query($sql,$cha);
    $jiexi=mysqli_fetch_all($query,MYSQL_ASSOC);
    if($jiexi){
        echo json_encode(array("code"=>1,"data"=>$jiexi));
        // header('location:./index.html');
    }else{
        $arr=array("colu"=>0);
        print_r(json_encode($arr));
        // header('location:./登录界面.html');
    }
?>