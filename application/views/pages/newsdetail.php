<!DOCTYPE html>
<html>
<body>

	<!-- Page Content -->
    <div class="container bodyCustomNewsDetail">

    	<div class="headNewsDetail">
    		<p ><?php echo($news['title']) ?></p>
    	</div>
    	<div class="dateNewsDetail">
    		<p><i><?php echo($news['postDate']); ?></i></p>	
    	</div>
    	


    	<img class="imgNewsDetail" src="<?php echo(base_url()); ?>assets/newspart/img/news/<?php echo($news['imageNews']); ?>">
  		

  		<div class="descNewsDetail"><p><?php echo($news['newsDescription']); ?></p></div>


    </div>
      
</body>
</html>