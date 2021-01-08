<?php
include './zhongwen.php';
    $number=$_POST['number'];
    $password=$_POST['password'];
    $sql=mysqli_connect('127.0.0.1','root','root','casio');
    $cha="SELECT*FROM `login` WHERE `number`='$number' AND `password`='$password'";
    $query=mysqli_query($sql,$cha);
    $jiexi=mysqli_fetch_all($query);
    if($jiexi){
        $arr=array("colu"=>1);
        print_r(json_encode($arr));
        setcookie('number',$number,0,'/');
        setcookie('rega',1,0,'/');
        // header('location:./index.html');
    }else{
        $arr=array("colu"=>0);
        print_r(json_encode($arr));
        // header('location:./登录界面.html');
    }
?>