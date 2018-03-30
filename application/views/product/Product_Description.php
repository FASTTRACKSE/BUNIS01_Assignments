
 <!DOCTYPE html>
<html lang="en">

  <head>

  
    <!-- Bootstrap core CSS -->
    <link href="<?php echo(base_url()); ?>assets/productpart/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo (base_url()); ?>assets/productpart/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    


<form  method="POST" action="<?=base_url()?>index.php/Product_Model/load_desc">
  

         
          
            <div  style="margin-top: 100px;" class="col-lg-4 col-md-6 mb-4 ">
              <div class="card h-100">
                <a href="#"><img class="card-img-top " height="400" width="400" src="<?php echo  base_url('assets/image/product/').$item['InsuranceImage'] ;?>"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo  $item['InsuranceName']  ;?></a>
                  </h4>
                  <h5><?php echo  $item['InsurancePrice']  ;?></h5>
                  <p class="card-text"><?php echo   $item['InsuranceDesc'] ;?></p> 

                  
     
                </div>
 
              </div>

            
    
<!-- <img src="<?php echo  base_url('uploads/').$item['InsuranceImage'] ;?>">

	<div class= "descimg" ><?php echo 'Product Name :' ?><?php echo $item['InsuranceName'] . "<br>";?></div>
	<div><?php echo 'Product Price : ' ?><?php echo $item['InsurancePrice']. "<br>";?></div>
	<div><?php echo 'Product Description :' ?><?php echo $item['InsuranceDesc']. "<br>";?></div>
 -->
<!-- <input type ="submit" name="home" value="Home"/> -->
</form>

 </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div> 
    <!-- /.container -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo(base_url()); ?>assets/productpart/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/productpart/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
