<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        	<a href="<?php echo(base_url()); ?>index.php/AdminController">Company Profiles</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
		<div class="row">
	      <div class="col-12">
	        <?php echo validation_errors(); ?>
			<?php foreach ($data as $d) {?>

			<!-- <form method="POST" action=""> -->
			<form action="<?php echo(base_url());?>/index.php/AdminController/updateData/<?php echo($d['id']) ?>" method="POST">
				Type <br>
				<input type="text" name="dataType" value="<?php echo $d['type']; ?>"><br><br>
				Description <br>
				<textarea name="dataDescription" required><?php echo($d['description']) ?></textarea>	
				<br><br>
	         	<a href="<?php echo(base_url()); ?>index.php/AdminController">
	            	<input type="button" value="Back" />
	          	</a>
				<input type="submit" name="update" value="Update">
			</form>

			<?php }  ?>

	      </div> 
	    </div>
	</div>
    <!-- /.container-fluid-->
    
</body>

</html>