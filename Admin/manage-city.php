<?php 
include '../Admin/inc/connection.php';

$result=$con->query("select * from state");
$sub_result=$con->query("select * from city");
if(isset($_REQUEST["city_add"]))
{
 $cityname=$_REQUEST["cityname"];
 $state=$_REQUEST["state"];
 
 $exe=$con->query("insert into city(cname,sid) values('$cityname','$state')");
 if($exe) echo "<script>alert('insert sucess');</script>";
 else echo "<script>alert('failed opration');</script>";
}
?>
<?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>



<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  <a href="manage-subcat.php" class="current">Manage city</a> </div>
    <h1>Manage city</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon icon-th"></i> </span>
              <h5>Manage City</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="#" name="password_validate" id="password_validate" novalidate="novalidate">
                  
                <div class="control-group">
                    <br/>
                   
                  
                  <div class="controls">
                      <label>Select state</label>
                      <select name="state">
                      <?php 
                        while($row=$result->fetch_object())
                        {
                      ?>
                      <option value="<?php echo $row->sid;?>"><?php echo $row->sname;?></option>
                      
                      <?php
                        }
                      ?>
                    </select>
                      
                   <label>Enter city</label>
                    <input type="text" name="cityname" id="cityname" />
                  </div>
                  <br/>
                </div>
               
                <div class="form-actions">
                    <input type="submit" value="city_add" name="city_add" class="btn btn-success" style="position: relative;left:200px;">
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
                  <th>city_id</th>
                  <th>city-Name</th>
                  <th>state-id</th>
                  <th>Add/Remove</th>
                 
                </tr>
              </thead>
              
              
                  <?php 
                   while($row=$sub_result->fetch_object())
                    {?>
                    <tr>
                    <td><?php echo $row->cid; ?></td>
                    <td><?php echo $row->cname; ?></td>
                    <td><?php echo $row->sid; ?></td>
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


