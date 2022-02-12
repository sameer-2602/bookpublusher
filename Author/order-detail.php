<?php 
include './inc/connection.php';
$book=$con->query("select * from book");
$user=$con->query("select * from users");
        




?>
<?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>

<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="Dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Manage Catagory</a> </div>
    <h1>View books</h1>
  </div>
  
    
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Order-id</th>
                  <th>Product-id</th>
                  <th>Product-Name</th>
                  <th>User-id</th>
                  <th>User-Name</th>
                  <th>Status</th>
                  
                  
                  <th>Status</th>
                 
                </tr>
               <?php while($row=$book->fetch_object())
                      {
                 ?>
                <tr>
                    <td><?php echo $row->book_id;?></td>
                    <td><?php echo $row->b_tittle;?></td>
                    <td><?php echo $row->c_id;?></td>
                    <td><?php echo $row->sc_id;?></td>
                    <td><?php echo $row->b_description;?></td>
                    <td><a class="btn btn-success">Enabled</a></td>
                    
                      <?php } ?>
                </tr>
              </thead>
             
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'inc/footer.php';?>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>


