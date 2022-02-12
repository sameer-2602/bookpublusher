<?php 
 include './controller/controller.php';
include '../User/inc/Header.php';
 
 
?>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
            
            <!-- Sidebar ================================================== -->
<?php include '../User/inc/Sidebar.php';?>
	<!-- Sidebar end=============================================== -->

<br/>


	<div class="span8">
    <ul class="breadcrumb">
		<li>Ideas<span class="divider">/</span></li>
		<li class="active">My ShoppingCart</li>
    </ul>
		
            
            <form method="post">
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
                  
                  foreach($_SESSION["cart"]  as $cart)
                  {
                      $p= $cart["price"];
                      $q= $cart["quantity"];
                      ?>
                         <tr>
                            <td><?php echo $cart["idea_id"];?></td>
                            <td><?php echo $cart["title"];?></td>
                            <td><?php echo $cart["price"];?></td>
                            <td>
                               
                                
                                <input type="text"  value="<?php echo $q;?>" name="cart['q'][<?php echo $cart["idea_id"];?>]">
                            
                            </td>
                            <td><?php echo  $p*$q;?></td>
                            <td class="center">
                                <a class="btn btn-danger" href="shoppingcart.php?remove_cartid=<?php echo $cart["idea_id"];?>">
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
                       
                           
                     
                        <a class="btn btn-danger" href="#">
                            <i class="glyphicon glyphicon-trash icon-white"></i>Place Order
                        </a>
        </td>
        
        <th>Total Order</th>
        <td></td>
          </tr>
        
                
				</tbody>
            </table>
            
      
          </form>  
		
		
            
			
			
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include '../User/inc/Footer.php ';?>