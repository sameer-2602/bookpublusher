<?php 
include '../Admin/inc/connection.php';

$result=$con->query("select * from state");

if(isset($_REQUEST["add"]))
{
    $statname=$_REQUEST["stat_name"];
    $exe=$con->query("insert into  state(sname) values('$statname')");
 
 if($exe)echo "<script>alert('state added sucessfully');document.location='manage-state.php'</script>";
 else echo "<script>alert('failed opration');</script>";  
}
?>
<?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="Dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Manage State</a> </div>
    <h1>Manage State</h1>
  </div>
  <div class="container-fluid">
    
    <div class="row-fluid">
      
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon icon-th"></i> </span>
              <h5>Manage State</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="#" name="password_validate" id="password_validate" novalidate="novalidate">
                  
                <div class="control-group">
                    <br/>
                  <label class="control-label">Enter Category Name</label>
                  
                  <div class="controls">
                    <input type="text" name="stat_name" id="statname" />
                  </div>
                  <br/>
                </div>
               
                <div class="form-actions">
                    <input type="submit" value="add_state" name="add" class="btn btn-success" style="position: relative;left:200px;">
                </div>
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
        
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>State ID</th>
                  <th>State Name</th>
                  <th>add/remove</th>
                 
                </tr>
                <?php
                while($row=$result->fetch_object())
                {
                    ?>
                        <tr>
                            <td><?php echo $row->sid;?></td>
                            <td><?php echo $row->sname;?></td>
                            <td><input type="button" name="disable" value="Disbale"/></td>
                            
                        </tr>
                    <?php
                }
                ?>
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


