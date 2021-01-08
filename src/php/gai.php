<?php
include './zhongwen.php';
    $thisid=$_POST['id'];
    $sql=mysqli_connect('127.0.0.1','root','root','casio');
    $cha="SELECT*FROM `cart` WHERE `thisid`='$thisid'";
    $query=mysqli_query($sql,$cha);
    $row = mysqli_fetch_assoc($query);
    $number = $row['number'];
    if($row){
        $number=$number+1;
        // echo json_encode(array("code"=>1));
        $gai="UPDATE`cart`SET`number`='$number'WHERE`thisid`='$thisid'";
    }
    $query1=mysqli_query($sql,$gai);
    if($query1){
        echo json_encode(array("code"=>1,'data'=>$number));
    }else{
        echo json_encode(array("code"=>0));
    }
?>