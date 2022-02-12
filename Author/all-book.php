<?php 
include './inc/connection.php';
$exe=$con->query("select c.cat_name,s.subcat_name,b.book_id,b.b_tittle,b.b_description,b.b_largedescription,b.b_image from book b  inner join category c ON c.cat_id=b.c_id inner join subcategory s ON s.subcat_id=b.sc_id"); 
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
                  <th>Book-id</th>
                  <th>Book-Tittle</th>
                  <th>category</th>
                  <th>Subctegory</th>
                  <th>Discription</th>
                  <th>Large Description</th>
                  <th>Image</th>
                  <th>Change/Edit Details</th>
                  <th>Remove</th>
                  
                 
                </tr>
               <?php while($row=$exe->fetch_object())
                      {
                   //echo '<pre>';
                   //print_r($row);
                 ?>
                <tr>
                    <td><?php echo $row->book_id;?></td>
                    <td><?php echo $row->b_tittle;?></td>
                    <td><?php echo $row->cat_name;?></td>
                    <td><?php echo $row->subcat_name;?></td>
                    <td><?php echo $row->b_description;?></td>
                    <td><?php echo $row->b_largedescription;?></td>
                    <td><img src="upload/<?php echo $row->b_image;?>" height="100" width="100"></td>
                    <td><a href="edit.php?edid=<?php $row->book_id;?>" class="btn btn-block">Edit</a> </td>
                    <td><a href="delete.php?delid=<?php $row->book_id;?>" type="Button" class="btn btn-success" >Delete</a></td>
                    
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


