<?php include './inc/header.php';?>
<?php include './inc/sidebar.php'; ?>
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="Dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Manage Catagory</a> </div>
    <h1>Add Books</h1>
  </div>
   <div class="container-fluid">
  <hr>
  <div class="row-fluid">
      <div class="span3"></div>
          
      <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add your-Complaints Here</h5>
        </div>
          <form class="form-horizontal">
          <div class="control-group">
              <label class="control-label">User-id</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="user-id" name="b_discription"/>
              </div>
            </div>
         
          <div class="control-group">
              <label class="control-label">Subject :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Subject" name="subject"/>
              </div>
            </div>
              
              
              <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                  <textarea class="form-control" name="description"></textarea>
              </div>
            </div>
          
          </form>
          
          
      </div>
      </div>
  </div>