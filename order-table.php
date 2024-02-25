<?php
session_start();
include("connection.php");
if(isset($_POST['place'])){
    $mail=$_SESSION['mail'];
    $sqln="select * from user_table where user_mail='".$mail."'";
    $res=mysqli_query($con,$sqln);
    $result=mysqli_fetch_array($res);
    $id=$result['user_id'];
    $add=$_POST['address'];
    $payment=1;
    $order=1;
    $sql="insert into order_table(user_id,delivery_addrs,payment_status,order_status) values($id,'$add',$payment,$order)";
    $res2=mysqli_query($con,$sql);
    $order=mysqli_insert_id($con);
    $sql3="select * from cartTable where username='".$mail."'";
    $r=mysqli_query($con,$sql3);
    while($arr=mysqli_fetch_array($r)){
        $pid=$arr['pid'];
        $sql="select * from product_table where product_id='".$pid."'";
        $res=mysqli_query($con,$sql);
        $a=mysqli_fetch_array($res);
        $pname=$a['product_name'];
        $pimage=$a['product_image'];
        $price=0.0;
        $order_q=1;
        $sql="insert into order_detail_table(order_id,product_id,product_name,product_image,product_price,order_qnty) values($order,$pid,'$pname','$pimage',$price,$order_q)";
        echo $sql;
        $res=mysqli_query($con,$sql);
        $sql="delete from cartTable where username='".$mail."'";
        $res=mysqli_query($con,$sql);
        header("location:product_page.php?i=1");
    }
}
?>