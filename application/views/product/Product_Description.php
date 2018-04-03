
<!DOCTYPE html>
<html>
<body>

  <!-- Page Content -->
    <div class="container bodyCustomNewsDetail">

      <div class="headNewsDetail">
        <p ><?php echo($item['ProductName']) ?></p>
      </div>
      <div class="dateNewsDetail">
        <p>Price: <i><?php echo($item['ProductPrice']); ?></i></p> 
      </div>
      


      <img class="imgNewsDetail" src="<?php echo(base_url()); ?>assets/image/product/<?php echo($item['ProductImage']); ?>">
      

      <div class="descNewsDetail"><p><?php echo($item['ProductDesc']); ?></p></div>


    </div>
      
</body>
</html>