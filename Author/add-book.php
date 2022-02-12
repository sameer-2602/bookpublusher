

<?php include './inc/connection.php';?>
<?php 

if(!isset($_SESSION["userid"]))
{
    header('location:index.php');
}
$cat=$con->query("select * from category");
$subcat=$con->query("select * from subcategory");
?>
<?php 
if(isset($_REQUEST["Add_book"]))
{
    //echo '<pre>';
    //print_r($_REQUEST);
//exit;
    $bname=$_REQUEST["b_tittle"];
$cat=$_REQUEST["cat"];
$subcat=$_REQUEST["subcat"];
$description=$_REQUEST["b_description"];
$large=$_REQUEST["b_largedescription"];
$price=$_REQUEST["price"];
$softcopy=($price/2);
$authorid=$_SESSION["userid"];

$isbn=$_REQUEST["isbn"];
$publication=$_REQUEST["publication"];

$coverpage=$_FILES["coverpage"]['name'];
$tmp=$_FILES["coverpage"]['tmp_name'];
$path="upload/$coverpage";
move_uploaded_file($tmp,$path);
//echo "insert into book(b_tittle,c_id,sc_id,b_description,b_largedescription,b_image,amount_hard,amount_soft,author_id) values('$bname','$cat','$subcat','$description','$large','$coverpage','$price','$softcopy','$authorid')";
//exit;

$exe=$con->query("insert into book(b_tittle,c_id,sc_id,b_description,b_largedescription,b_image,amount_hard,amount_soft,author_id,isbn,publications) values('$bname','$cat','$subcat','$description','$large','$coverpage','$price','$softcopy','$authorid','$isbn','$publication')");

if($exe)
{
  echo "<script>alert('added sucessfully'); document.location='all-book.php';</script>";
}
 else 
{
    echo "<script>alert('error'); </script>";
}
}
?>
<?php include './inc/header.php';?>

<?php include './inc/sidebar.php'; ?>
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="Dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a >Manage Book</a> </div>
    <h1>Add Books</h1>
  </div>
   <div class="container-fluid">
  <hr>
  <div class="row-fluid">
      <div class="span3"></div>
          
      <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
             <div class="control-group">
              <label class="control-label">Book-Title</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Enter title" name="b_tittle" />
              </div>
            </div>
               <div class="control-group">
              <label class="control-label">Category :</label>
              <div class="controls">
                  <select name="cat">
                      <?php
                      while($row=$cat->fetch_object())
                      {?>
                      <option value="<?php echo $row->cat_id;?>"><?php echo $row->cat_name;?></option>
                     <?php }?>
                  </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sub Category:</label>
              <div class="controls">
               <select name="subcat">
                      <?php
                      while($row=$subcat->fetch_object())
                      {?>
                      <option value="<?php echo $row->subcat_id;?>"><?php echo $row->subcat_name;?></option>
                     <?php }?>
                  </select>
              </div>
            </div>
                <div class="control-group">
                <label class="control-label">Description :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Small Description" name="b_description"/>
                </div>
              </div>
            
            <div class="control-group">
              <label class="control-label">Large Description</label>
              <div class="controls">
                <textarea class="span11" name="b_largedescription" ></textarea>
              </div>
            </div>
              
              <div class="control-group">
              <label class="control-label">Amount of Hard copy</label>
              <div class="controls">
                  <input type="number" class="span11" placeholder="Amount of hard copy  indian currency" name="price"/>&nbsp;<b>INR</b>
              </div>
            </div>
              
              <div class="control-group">
              <label class="control-label">Cover-page</label>
              <div class="controls">
                  <input type="file" placeholder="select file" name="coverpage"/>
              </div>
            </div>
                <div class="control-group">
              <label class="control-label">ISBN</label>
              <div class="controls">
                  <input type="text" placeholder="isbn" name="isbn"/>
              </div>
            </div>
                <div class="control-group">
              <label class="control-label">Publications</label>
              <div class="controls">
                  <select name="publication">
                      <option value="THINK BIG PUBLICATIONS">THINK BIG PUBLICATIONS</option>
                  </select>
              </div>
            </div>
                
                
              <div class="form-actions">
              <input type="submit" name="Add_book" value="add_book" class="btn btn-primary" >
            </div>
          </form>
        </div>
      </div>
      </div>
      <div class="span3"></div>
      

<?php include 'inc/footer.php';?>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>


