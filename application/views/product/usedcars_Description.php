<!DOCTYPE html>
<html lang="en">

  <head>


    <!-- Custom styles for this template -->
    <link href="<?php echo (base_url()); ?>assets/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    



<form  method="POST" action="<?=base_url()?>index.php/Product_Model/load_usedcars_desc">
  

         
          
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100" >
                <a href="#"><img class="card-img-top marginTop"  src="<?php echo  base_url('assets/image/product/').$item['UsedCarsImage'] ;?>"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo  $item['UsedCarsName']  ;?></a>
                  </h4>
                  <h5><?php echo  $item['UsedCarsPrice']  ;?></h5>
                  <p class="card-text"><?php echo   $item['UsedCarsDesc'] ;?></p> 

           
     
                </div>
 
              </div>

            
    

</form>

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