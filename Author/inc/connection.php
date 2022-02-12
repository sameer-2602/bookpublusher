<?php
$con=new mysqli("localhost","root","","project");
 
if($con->connect_error)
{  
 echo $con->connect_error;
 exit;
}

session_start();



?>