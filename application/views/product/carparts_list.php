<!DOCTYPE html>
<html lang="en">

  <head>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo (base_url()); ?>assets/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    

    <!-- Page Content -->
 
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
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
          </div>

          <div class="row">

            <?php foreach ($CarPartsID as $row)
  {
    ?>
          
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100" >
                <a href="#"><img class="card-img-top"  src="<?php echo  base_url('assets/image/product/').$row['CarPartsImage'] ;?>"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo  $row['CarPartsName']  ;?></a>
                  </h4>
                  <h5><?php echo  $row['CarPartsPrice']  ;?></h5>
                  <!-- <p class="card-text"><?php echo   $row['CarPartsDesc'] ;?></p> -->

              <a href="load_carparts_desc/<?php echo $row['CarPartsID'] ?>">Find out more</a>
     
                </div>
 
              </div>

            </div>
              <?php  
  }
  ?>
           
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div> 
    <!-- /.container -->

    
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo(base_url()); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>