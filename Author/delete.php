<?php 

include '../Author/inc/connection.php';

$id=$_REQUEST["delid"];
$delete=$con->query("delete from book where id='$id'");

if($delete)
{
    header('location:all-book.php');
}
 else 
{
 echo "<script>alert('cheak data Again');</script>";  
}

?>