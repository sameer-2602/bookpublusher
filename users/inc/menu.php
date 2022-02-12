 <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
               <li><a href="index.php">Home</a></li>  
            <?php
            include 'connection.php';
            
            $categories= $con->query("select * from category");
            while($cat=$categories->fetch_object())
            {
                $cat_id= $cat->cat_id;
                $subcategories= $con->query("select * from subcategory where cat_id='$cat_id'");
                
                ?>
                    <li><a href="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_name; ?> <span class="caret"></span></a>
                        <?php
                        if(isset($subcategories))
                        {
                            ?>
                                <ul class="dropdown-menu">
                                    <?php
                                    while($sub=$subcategories->fetch_object())
                                    {
                                        ?>
                                             <li><a href="<?php echo $sub->subcat_id; ?>"><?php echo $sub->subcat_name; ?></a></li>
                                        <?php
                                    }
                                    ?>
                           
                                </ul>
                           <?php 
                        }
                        
                            
                        ?>
                       
                    </li>
                <?php
            }
            
            ?>
                
             
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  