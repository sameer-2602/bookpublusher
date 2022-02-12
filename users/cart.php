<?php 

session_start();
//if(!isset($_SESSION["id"]))
//{
//    echo "<script>alert('you must login first');</script>";
//    header('location:Login.php');
//}

?>


<?php include './inc/header.php';?>
 <?php include './inc/menu.php';?>  
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
               <ul class="breadcrumb">
		<li>Ideas<span class="divider">/</span></li>
		<li class="active">My ShoppingCart</li>
    </ul>
               <form action="cart1.php" method="post">
               <div class="table-responsive">
                  <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Serial</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Amount</th>
                  <th>Actions</th>
                  
	       </tr>
              </thead>
              <tbody>
                  <?php
                  $total=0;
                  foreach($_SESSION["cart"]  as $cart)
                  {
                      
                    //  print_r($cart);
                      $p= $cart["price"];
                      $q= $cart["quantity"];
                      
                      $total=$total+($p*$q);
                      ?>
                         <tr>
                            <td><?php echo $cart["book_id"];?></td>
                            <td><?php echo $cart["title"];?></td>
                            <td><?php echo $cart["price"];?></td>
                            <td>
                               
                                
                                <input type="text"  value="<?php echo $q;?>" name="cart['q'][<?php echo $cart["book_id"];?>]">
                            
                            </td>
                            <td><?php echo  $p*$q;?></td>
                            <td class="center">
                                <a class="btn btn-danger" href="shoppingcart.php?remove_cartid=<?php echo $cart["book_id"];?>">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                   Remove
                                </a>
                             </td>
        
                </tr>	 
                      <?php
                      
                  }
                  
                  
                  ?>
               
          
		
                <tr><td class="center" colspan="4" align="right">
                        <a class="btn btn-success" href="#">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>Clear Cart
                       </a>
                        
                        <button type='submit' name='updatecart' class="btn btn-info" value="update"> <i class="glyphicon glyphicon-edit icon-white"></i>Update Cart</button>
                       
                           
                     
                        <a class="btn btn-danger" href="add_order.php">
                            <i class="glyphicon glyphicon-trash icon-white"></i>Place Order
                        </a>
        </td>
        
        <th>Total Order</th>
        <td><?php if(isset($total)) echo $total; else echo 0;?></td>
          </tr>
        
                
				</tbody>
            </table>
                </div>
             </form>
             <!-- Cart Total view -->
          
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

 <?php include './inc/footer.php';?>