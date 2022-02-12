<?php 
include './inc/connection.php';
session_start();

if(isset($_REQUEST["login"]))
{
     $name=$_REQUEST["uname"];
     $pass=$_REQUEST["pass"];
   
     $result=$con->query("select * from users where fname='$name' and password='$pass'");
     $rowcount=$result->num_rows;
     if($rowcount==1)
     {
       $row= $result->fetch_object();  
       $_SESSION["id"]= $row->user_id; 
       header('location:index.php');
     }
     else echo "<script>alert('wrong email and password')</script>";
     
}
?>
<?php include './inc/header.php';?>
 <?php include './inc/menu.php';?> 


  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <div class='container'>
      <div class='row-fluid'>
          <div class='col-md-3'></div>
          <div class="col-md-6">
                <div class="aa-myaccount-register">
                    <br/><br/><br/>
                    <h3><b>Login Here</b></h3>
                 <form class="aa-login-form">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email" name="uname">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="pass">
                     <br/><br/>
                    <input type="submit" class="btn btn-danger" name="login" value="submit">
                    <a href="account.php" class="btn btn-success">Register here</a>
                 </form>
                 <br/><br/>
                 <div class='col-md-3'></div>
                </div>
        </div>
      </div>
  </div>
<br/>
    <?php include './inc/footer.php';?>