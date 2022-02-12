<?php
include 'inc/connection.php';

session_start();

date_default_timezone_set('asia/kolkata');

$date = date('Y-m-d H:i:s');

$user_id= $_SESSION["id"];

$con->query("insert into order1(ord_date,user_id,status) values('$date','$user_id','pending')");

$order_id= $con->insert_id;

foreach($_SESSION["cart"]  as $cart)
{
    $p= $cart["price"];
    $q= $cart["quantity"];
    $amount=$p*$q;
    $name=$cart['title'];
    
    $con->query("insert into ord_details(ord_id,book_name,price,quantity,amount) values('$order_id','$name','$p','$q','$amount')");
    
    
}    

echo "<script>alert('Your Order Has been Placed'); document.location='http://localhost/sam/users/';</script>";

?>