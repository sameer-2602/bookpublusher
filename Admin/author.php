<?php 

include '../Admin/inc/connection.php';
$result=$con->query("select* from users where roll_id=2");

?>    
<?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Manage Author</a> </div>
    <h1>Author</h1>
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
                  <th>Author-id</th>
                  <th>Author-Name</th>
                  <th>Contact</th>
                  <th>Adress</th>
                  <th>Add Remove</th>
                 
                </tr>
              </thead>
              <?php 
               while($row=$result->fetch_object())
               {?>   
              <tr>
              <td><?php echo $row->user_id;?></td>
               <td><?php echo $row->fname;?>&nbsp;<?php echo $row->lname;?></td>
                <td><?php echo $row->contact;?></td>
                 <td><?php echo $row->address;?></td>
                 <td><a href="" class="btn btn-primary">Block</a></td>
              </tr>
               <?php }?>
              
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


