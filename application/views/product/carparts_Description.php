 <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo(base_url()); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo (base_url()); ?>assets/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



<form  method="POST" action="<?=base_url()?>index.php/Product_Model/load_carparts_desc">
  

         
          
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" height="400" width="400" src="<?php echo  base_url('uploads/').$item['CarPartsImage'] ;?>"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo  $item['CarPartsName']  ;?></a>
                  </h4>
                  <h5><?php echo  $item['CarPartsPrice']  ;?></h5>
                  <p class="card-text"><?php echo   $item['CarPartsDesc'] ;?></p> 

             
     
                </div>
 
              </div>

            
    

</form>

 </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div> 
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo(base_url()); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
