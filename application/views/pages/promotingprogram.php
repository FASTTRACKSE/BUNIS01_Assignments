<!DOCTYPE html>
<html>
<body>

  

	<!-- Page Content -->
    <div class="container bodyCustom">

      <h1 class="my-4">NEWS
        <small>| <?php echo($headerTitle); ?></small>
      </h1>

      <!-- Page Heading -->
      
      <div class="row">

      	<?php foreach($newsList as $news):?>
      		<div class="col-lg-4 col-sm-6 portfolio-item">
	          <div class="card h-100">
	            <a href="#"><img class="card-img-top customNewsImg" src="<?php echo(base_url()); ?>assets/newspart/img/news/<?php echo($news['id']); ?>.jpg" alt=""></a>
	            <div class="card-body">
	              <h4 class="card-title">
	                <a href="#"><?php echo($news['id']); ?><?php echo($news['title']) ?></a>
	              </h4>
	              <p class="card-text"><?php echo($news['newsDescription']) ?></p>
	            </div>
	          </div>
	        </div> 
      	<?php endforeach; ?>
        


      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <div>

         <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
            </li>

            <?php for($i = 0; $i < $total_rows/6 ; $i++): ?>
             
                  
                  <li class="page-item">
                    <a class="page-link" href="<?php echo(base_url()); ?>index.php/NewsController/viewPromoProg/<?php if($i<1){echo('');}else{echo($i+1);} ?>"><?php echo($i+1); ?></a>
                  </li>
                  
              
            <?php endfor; ?>

            <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
            </li>

        </ul> 
      </div>
      

    </div>
    <!-- /.container -->
</body>
</html>