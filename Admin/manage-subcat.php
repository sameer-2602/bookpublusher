





<?php 
include '../Admin/inc/connection.php';

$result=$con->query("select c.cat_id,c.cat_name,s.subcat_id,s.subcat_name from category c inner join subcategory s ON c.cat_id=s.cat_id");
$cat=$con->query("select * from category");

if(isset($_REQUEST["subcat_add"]))
{
 $subcatname=$_REQUEST["subcat_name"];
 echo $cat=$_REQUEST["cat"];
 $exe=$con->query("insert into subcategory(subcat_name,cat_id) values('$subcatname','$cat')");
 if($exe) echo "<script>alert('Category Added Successfully..');document.location='manage-subcat.php';</script>";
 else echo "<script>alert('failed opration');</script>";
}
?>

<?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  <a href="manage-subcat.php" class="current">Manage Sub-Catagory</a> </div>
    <h1>Manage Sub-Catagory</h1>
  </div>
  <div class="container-fluid">
    <hr>
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
                   
                  
                  <div class="controls">
                      <label>Select Catagory</label>
                      <select name="cat">
                      <?php 
                        while($row=$cat->fetch_object())
                          { ?>
                           <option value="<?php echo $row->cat_id;?>"><?php echo $row->cat_name; ?></option>
                    <?php } ?>
                    </select>
                   <label>Enter Sub Catagory</label>
                    <input type="text" name="subcat_name" id="subcat_name" />
                  </div>
                  <br/>
                </div>
               
                <div class="form-actions">
                    <input type="submit" value="Add Sub-Category" name="subcat_add" class="btn btn-success" style="position: relative;left:200px;">
                </div>
              </form>
            </div>
          </div>
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>subcat_id</th>
                  <th>Subcat-Name</th>
                  
                  <th>Cat_Name</th>
                  <th>Add/Remove</th>
                 
                </tr>
              </thead>
              
              
                  <?php 
                   while($row=$result->fetch_object())
                    {?>
                    <tr>
                    <td><?php echo $row->subcat_id;?></td>
                    <td><?php echo $row->subcat_name; ?></td>
                    
                    <td><?php echo $row->cat_name; ?></td>
                    <td><input type="submit" name="enable"></td>
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


