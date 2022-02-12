<?php 
include 'inc/connection.php';
if(!isset($_SESSION["adminid"]))
{
    echo "<script>alert('Login is Must'); document.location='index.php';</script>";
}
if(isset($_REQUEST['editid'])){
    $id = $_REQUEST['editid'];
    $resultVar = $con->query("select * from category where cat_id=$id");
    $catname = mysqli_fetch_assoc($resultVar);
}
if(isset($_REQUEST['delid'])){
    $id = $_REQUEST['delid'];
    $resultVar = $con->query("delete from category where cat_id=$id");
    header('location:manage-cat.php');
}
if(isset($_REQUEST['update'])){
    $id = $_REQUEST['editid'];
    $name=$_REQUEST["catname"];
    $exe=$con->query("update category set cat_name='$name where cat_id=$id");
    header('location:manage-cat.php');
}




$result=$con->query("select * from category where status='enable'");





if(isset($_REQUEST["add"]))
{
    $name=$_REQUEST["catname"];
    $exe=$con->query("insert into category (cat_name) values('$name')");
 
 if($exe)echo "<script>alert('catagory added sucessfully');</script>";
 else echo "<script>alert('failed opration');</script>";  
}
?>
<?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="Dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Manage Catagory</a> </div>
    <h1>Manage Catagory</h1>
  </div>
  <div class="container-fluid">
    
    <div class="row-fluid">
      
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon icon-th"></i> </span>
              <h5>Manage Categories</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="#" name="password_validate" id="password_validate" novalidate="novalidate">
                  
                <div class="control-group">
                    <br/>
                  <label class="control-label">Enter Category Name</label>
                  
                  <div class="controls">
                    <input type="text" name="catname" id="catname" value="<?php if(isset($catname['cat_name'])) { echo $catname['cat_name'];} ?>" />
                  </div>
                  <br/>
                </div>
               <?php if(isset($catname['cat_name'])): ?>
                <div class="form-actions">
                    <input type="hidden" name="id" value="<?=$catname['cat_name']?>">
                    <input type="submit" value="Update" name="update" class="btn btn-success" style="position: relative;left:200px;">
                </div>
                  <?php endif ?>
                  <?php if(!isset($catname['cat_name'])): ?>
                      <div class="form-actions">
                          <input type="submit" value="Add" name="add" class="btn btn-success" style="position: relative;left:200px;">
                      </div>
                  <?php endif ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

          <?php if(!isset($catname['cat_name'])): ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Category Id</th>
                  <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                <?php
                foreach($result as $row)
                {
                    ?>
                        <tr>
                            <td><?php echo $row['cat_id'];?></td>
                            <td><?php echo $row['cat_name'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <td>
                                <a class="btn btn-primary pl-2" href="manage-cat.php?editid=<?=$row['cat_id']?>">Edit</a>
                                <a class="btn btn-danger ml-2" href="manage-cat.php?delid=<?=$row['cat_id']?>">Delete</a>

                        </tr>
                    <?php
                }
                ?>
              </thead>
             
            </table>
          </div>
        </div>
      </div>
<?php endif; ?>
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


