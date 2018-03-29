<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!-- Custom styles for this template -->
    <link href="<?php echo (base_url()); ?>assets/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- <div class="col-lg-3">

          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>

        </div> -->
        <!-- /.col-lg-3 -->

        <div class="col-lg-12 caro-margin">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="<?php echo (base_url()); ?>assets/image/homepage/1200x350a.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo (base_url()); ?>assets/image/homepage/1200x350b.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo (base_url()); ?>assets/image/homepage/1200x350c.jpg" alt="Third slide">
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

          <br>
          <br>

          <h3>Today's News</h3>

            <div class="row">
            <?php foreach ($id as $row)  { ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100" >
                <a href="#"><img class="card-img-top customImg"  src="<?php echo  base_url('assets/newspart/img/news/').$row['imageNews'] ;?>"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $row['title'];?></a>
                  </h4>
                  <p class="card-text"><?php echo $row['newsDescription'];?></p>
                </div>
              </div>
            </div>
            <?php  }?>

          </div>
          <!-- /.row -->

          <br>
          <br>

          <h3>Our Services</h3>

          <br>

          <div class="row">
            <div class="col-md-2 col-sm-6 mb-4">
              <img class="homepage-service" src="<?php echo (base_url()); ?>assets/image/homepage/400x300a.jpg" alt="">
            </div>

            <div class="col-md-2 col-sm-6 mb-4">
              <img class="homepage-service" src="<?php echo (base_url()); ?>assets/image/homepage/400x300b.png" alt="">
            </div>

            <div class="col-md-2 col-sm-6 mb-4">
              <img class="homepage-service" src="<?php echo (base_url()); ?>assets/image/homepage/400x300c.jpg" alt="">
            </div>

            <div class="col-md-2 col-sm-6 mb-4">
              <img class="homepage-service" src="<?php echo (base_url()); ?>assets/image/homepage/400x300d.jpg" alt="">
            </div>

            <div class="col-md-2 col-sm-6 mb-4">
              <img class="homepage-service" src="<?php echo (base_url()); ?>assets/image/homepage/400x300e.jpg" alt="">
            </div>

          </div>
          <!-- /.row -->

          <br>
          <br>
          <br>
          <br>
          <br> 

          <div class="row">
            <div class="col-lg-12">
              <h6 class="sponsor">In sponsorship with</h6>
            </div>
            <div class="col-lg-2 col-sm-6 text-center mb-4">
              <div class="logo">
                <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo (base_url()); ?>assets/image/homepage/100x100b.png" alt="">
              </div>
              <!-- <h3>John Smith
                <small>Job Title</small>
              </h3> -->
            </div>
            <div class="col-lg-2 col-sm-6 text-center mb-4">
              <div class="logo">
                <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo (base_url()); ?>assets/image/homepage/100x100c.png" alt="">
              </div>
              <!-- <h3>John Smith
                <small>Job Title</small>
              </h3> -->
            </div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-12 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo (base_url()); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo (base_url()); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>