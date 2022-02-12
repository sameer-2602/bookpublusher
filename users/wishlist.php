<?php 
session_start();
if(!isset($_SESSION["id"]))
{
 header('location:Login.php');
 echo "<script>alert('you must login first');</script>";
}?>

<!DOCTYPE html>
<?php include './inc/header.php';?>
<?php include './inc/menu.php';?>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->  
  <?php include './inc/footer.php';?>