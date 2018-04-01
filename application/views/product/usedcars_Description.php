<!DOCTYPE html>
<html lang="en">

  <head>


    <!-- Custom styles for this template -->
    <link href="<?php echo (base_url()); ?>assets/css/shop-homepage.css" rel="stylesheet">
         <div style="margin-left:200px">
<h1 style="margin-top:100px">Used Cars</h1>
</div>
  </head>

  <body>
 <div class="container">
    



<form  method="POST" action="<?=base_url()?>index.php/Product_Model/load_usedcars_desc">
  

         
          
            <div style="margin-top: 100px;" class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100" >
                <img class="card-img-top marginTop"  src="<?php echo  base_url('assets/image/product/').$item['UsedCarsImage'] ;?>">
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo  $item['UsedCarsName']  ;?>
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