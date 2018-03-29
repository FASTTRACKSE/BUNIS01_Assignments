<!DOCTYPE html>
<html>
<body>

	<!-- Page Content -->
    <div class="container bodyCustomNewsDetail">

    	<h1 class="my-4"><?php echo($news['title']) ?></h1>


    	<img class="imgNewsDetail" src="<?php echo(base_url()); ?>assets/newspart/img/news/<?php echo($news['imageNews']); ?>">
  		

  		<div class="descNewsDetail"><p><?php echo($news['newsDescription']); ?></p></div>


    </div>
      
</body>
</html>