 <!DOCTYPE html>
<html lang="en">

  <head>

    <link href="<?php echo (base_url()); ?>assets/productpart/css/shop-homepage.css" rel="stylesheet">
       <div style="margin-left:200px">
<h1 style="margin-top:100px">Oil and Fluid</h1>
</div>
  </head>

  <body>

    <div class="container">
         


          <div style="margin-top: 100px;" class="row">

            <?php foreach ($OilandFluidID as $row)
  {
    ?>
          
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100" >
                <img class="card-img-top customImg"  src="<?php echo  base_url('assets/image/product/').$row['OilandFluidImage'] ;?>">
                <div class="card-body">
                  <h4 class="card-title">
                   <?php echo  $row['OilandFluidName']  ;?>
                  </h4>
                  <h5><?php echo  $row['OilandFluidPrice']  ;?></h5>
                 
              <a href="load_oil_fluid_desc/<?php echo $row['OilandFluidID'] ?>">Find out more</a>
     
                </div>
 
              </div>

            </div>
              <?php  
  }
  ?>
</div>

</div>
    <!-- Navigation -->

    <!-- Page Content -->
 
        <!-- /.col-lg-3 -->

 <!--        <div class="col-lg-9 marginTop">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="<?php echo  base_url('assets/image/product/imgslider1.jpg') ;?>" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo  base_url('assets/image/product/imgslider2.jpg') ;?>" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo  base_url('assets/image/product/imgslider3.jpg') ;?>" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> -->

           
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div> 
    <!-- /.container -->

    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo(base_url()); ?>assets/productpart/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/productpart/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
