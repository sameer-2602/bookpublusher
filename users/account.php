<?php 

include './inc/connection.php';
$state=$con->query("select * from state");
$city=$con->query("select * from city");

if(isset($_REQUEST["submit"]))
{
 $fname=$_REQUEST["fname"];
 $lname=$_REQUEST["lname"];
 $password=$_REQUEST["pass"];
 $email=$_REQUEST["email"];
 
 $contact=$_REQUEST["contact"];
 $typeofuser=$_REQUEST["typeofuser"];
 $gender=$_REQUEST["gender"];
 $dob=$_REQUEST["dob"];
 $address=$_REQUEST["address"];
 $state=$_REQUEST["state"];
 $city=$_REQUEST["city"];
 
 $image=$_FILES["image"];
 
 echo "<pre>";
 print_r(($_REQUEST));
 exit;
 
 $exe= $con->query("insert into users(fname,uname,lname,password,email,contact,user_type,gender,dob,address,sid,cid) values('$fnmae','$uname','$lname','$password','$email','$contact','$typeofuser','$gender','$dob','$address','$state','$city')");    
 if($exe) 
 {
     echo "<script>alert('registration sucessful')</script>";
 }   
 else 
 {echo "please check details again" ;}
}?>

<?php include './inc/header.php';?>
 <?php include'./inc/menu.php';?> 
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
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
         <form method="post">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
                
                <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Personal & Contact Details</h4>
                 <div action="" class="aa-login-form" method="post">
                     <div method="post" action=""class="aa-login-form">
                    <label for="">First Name<span>*</span></label>
                    <input type="text" placeholder="Enter Your First Name" name="fname">
                     <label for="">Last Name<span>*</span></label>
                    <input type="text" placeholder="Enter Your last Name" name="lname">
                    <label for="">Email<span>*</span></label>
                    <input type="email" placeholder="Enter Your email" class="form-control"name="email">
                    <label for="">Contact<span>*</span></label>
                    <input type="contact" placeholder="Enter Your Contact number" class="form-control" name="contact">
                    <div class="form-group">  
                        <label for="">Gender<span>*</span></label>
                        <select id="" class="form-control" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            
                        </select>
                    </div>
                    <div>
                         <label for=""><span>Date of Birth*</span></label>
                         <input type="date" placeholder="date of birth" class="form-control" name="dob">
                    </div>
                    <br/>
                     <div class="form-group">  
                        <label for="">Address<span>*</span></label>
                      <textarea class="form-control" rows="3" placeholder="enter your address" name="address"></textarea>
                    </div>
                    
                      <div class="form-group">  
                        <label for="">Select State<span>*</span></label>
                        <select id="" class="form-control" name="state">
                            <?php while($row=$state->fetch_object())
                            {?>
                            <option value="<?php echo $row->sid;?>"><?php echo $row->sname;?> </option>
                            <?php } ?>
                            
                        </select>
                    </div>
                    <div class="form-group">  
                        <label for="">City<span>*</span></label>
                        <select id="" class="form-control" name="city">
                         <?php while($row=$city->fetch_object())
                            {?>
                            <option value="<?php echo $row->cid;?>"><?php echo $row->cname;?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div>
                    <label for="">image<span>*</span></label>
                    <input type="file" placeholder="select an image file " class="form-control" name="image">
                    </div>
                    
                    <br/>
                    <div>
                        <input type="submit" name="submit"  class="btn btn-success" value="Submit">
                        <input type="reset" name="reset"  class="btn btn-danger" value="Cancel">
                        <br/><br/><br>
                    </div>
                    <div>
                   
                 </div>
                </div>
                 </div>
                
                </div>
                </div>
                <div class="col-md-6">
                <div class="aa-myaccount-register">
                    
                 <h4>Security Credentials</h4>
                 <div class="aa-login-form">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email" name="uname" class="form-control">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="pass" class="form-control">
                     <label for="">Confirm Password<span>*</span></label>
                    <input type="password" placeholder="Confirm Password" name="cpass" class="form-control">
                    <label for="">Select type<span>*</span></label>
                    <select class="form-control" name="typeofuser">
                        <option value="user">User</option>
                        <option value="author">Author</option>
                    </select>
                 </div>
                </div>
                </div>
        </div>
      </div>
  </div>
                    
                    
                    
                </div>
              </div>
              </div>
            </div>          
         </div>
         </form>  
     </div>
        
     </div>
   </div>
 </section>
 <!-- / Cart view section --> 
 
 
 
 
 
<?php include './inc/footer.php'; ?>
 <script type="text/javascript" src="js/register.js"></script>
