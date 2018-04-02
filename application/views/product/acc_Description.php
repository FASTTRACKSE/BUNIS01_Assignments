<!DOCTYPE html>
<html lang="en">

  <head>

 
    <!-- Custom styles for this template -->
    <link href="<?php echo (base_url()); ?>assets/css/shop-homepage.css" rel="stylesheet">
          <div style="margin-left:200px">
<h1 style="margin-top:100px">Accessory</h1>
</div>


  </head>

  <body>
        <div class="container">

    


<form  method="POST" action="<?=base_url()?>Product_Model/load_accessory_desc">
  

         
          
            <div style="margin-top: 100px;" class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <img class="card-img-top" height="400" width="400" src="<?php echo  base_url('assets/image/product/').$item['AccessoryImage'] ;?>">
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo  $item['AccessoryName']  ;?>
                  </h4>
                  <h5><?php echo  $item['AccessoryPrice']  ;?></h5>
                  <p class="card-text"><?php echo   $item['AccessoryDesc'] ;?></p> 

             
              
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