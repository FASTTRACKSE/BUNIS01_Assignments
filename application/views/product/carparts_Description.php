 <!DOCTYPE html>
<html lang="en">

  <head>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo (base_url()); ?>assets/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>



<form  method="POST" action="<?=base_url()?>index.php/Product_Model/load_carparts_desc">
  

         
          
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" height="400" width="400" src="<?php echo  base_url('assets/image/product/').$item['CarPartsImage'] ;?>"></a>
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
   

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo(base_url()); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
