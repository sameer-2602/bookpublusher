<?php 
include './inc/connection.php';
$result=$con->query("select * from feedback");
?>
    <?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>



<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Manage-sub Catagory</a> <a href="manage-subcat.php" class="current">Manage Sub-Catagory</a> </div>
        <h1>Feedback</h1>
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
                  <th>fid</th>
                  <th>f_tittle</th>
                  <th>f_comment</th>
                  <th>f_date</th>
                  <th>user_id</th>
                </tr>
                <?php 
                while($row=$result->fetch_object()) 
                 { ?>
                <tr>
                    <td><?php echo $row->fid;?></td>
                    <td><?php echo $row->f_tittle;?></td>
                    <td><?php echo $row->f_comment;?></td>
                    <td><?php echo $row->f_date;?></td>
                    <td><?php echo $row->u_id; ?></td>
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


