<?php
include 'inc/connection.php';

session_start();
/// add to cart
if(isset($_REQUEST["pid"]))
{
   
    $book_id= $_REQUEST["pid"];
    $data = array("mi_id" => $book_id);
    $book= $con->query("select * from book where book_id='$book_id'");
    //$idea = $obj->select_where($con, "my_idea", $data);
    $book_data = $book->fetch_object();
    
  //  echo count($_SESSION['cart']);
    
    if(count($_SESSION["cart"])!=0)
    {
       // echo "1"; exit;
        $count=0;
        foreach($_SESSION["cart"] as $cart_items)
        {
           
            if($cart_items["book_id"]==$book_id)
            {
                $count++;
                $_SESSION["cart"][$book_id]["quantity"]= $_SESSION["cart"][$book_id]["quantity"]+1; 
                //header('location:../shoppingcart.php');
            }
       
        }
        if($count==0)
        {
            
            $_SESSION["cart"][$book_id]["book_id"]=$book_data->book_id;
            $_SESSION["cart"][$book_id]["title"]=$book_data->b_tittle;
            $_SESSION["cart"][$book_id]["price"]=$book_data->amount_hard;
            $_SESSION["cart"][$book_id]["image"]=$book_data->b_image;
            $_SESSION["cart"][$book_id]["quantity"]=1;

            header('location:cart.php');
        }
     
    }
    else
    {
        
        $_SESSION["cart"][$book_id]["book_id"]=$book_data->book_id;
            $_SESSION["cart"][$book_id]["title"]=$book_data->b_tittle;
            $_SESSION["cart"][$book_id]["price"]=$book_data->amount_hard;
            $_SESSION["cart"][$book_id]["image"]=$book_data->b_image;
            $_SESSION["cart"][$book_id]["quantity"]=1;

            header('location:cart.php');
  
    }  
            
}

/// delete values from cart

if(isset($_REQUEST["remove_cartid"]))
{
    $book_id= $_REQUEST["remove_cartid"];
    unset( $_SESSION["cart"][$book_id]);
    header('location:cart.php');
}

if(isset($_REQUEST["updatecart"]))
{
   
      foreach($_SESSION["cart"] as $cart_items)
        {
          
            foreach($_REQUEST["cart"] as $data )
            {
                foreach($data as $k=>$v)
                {
                    if($cart_items["book_id"]==$k)
                    {
                       $_SESSION["cart"][$k]["quantity"]=$v;
                    }
                }
            }
            
        }
    
        header('location:cart.php');
     
     
}
?>