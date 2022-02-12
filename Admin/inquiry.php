<?php 
include './inc/connection.php';
$result=$con->query("select* from inquiry");
?>



<?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>



<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">View Inquiry </a>  </div>
    <h1>Inquiry</h1>
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
                  <th>inq_id</th>
                  <th>inq_name</th>
                  <th>subject</th>
                  <th>Reply</th>
                 
                </tr>
              </thead>
              <?php  while($row=$result->fetch_object())
              {
              ?>
              <tr>
                  <td><?php echo $row->inq_id;?></td>
                  <td><?php echo $row->inq_name;?></td>
                  <td><?php echo $row->inq_message;?></td>
                  <td><a href="reply.php?delid=<?php echo $row->id;?>">Reply</a></td>
                  
              </tr>
              <?php } ?>
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


