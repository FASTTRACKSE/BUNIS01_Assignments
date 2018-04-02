<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        	<a href="<?php echo(base_url()); ?>AdminController/companyProfile">Company Profiles</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
		<div class="row">
	      <div class="col-12">
			<?php foreach ($data as $d) {?>

			<form action="<?php echo(base_url());?>AdminController/updateData/<?php echo($d['id']) ?>" method="POST">
				<h3>Type</h3>
				<input type="text" name="dataType" value="<?php echo $d['type']; ?>" required><br><br>
				<h3>Description</h3> 
				<textarea name="dataDescription" required><?php echo($d['description']) ?></textarea>	
				<br><br>
	         	<a href="<?php echo(base_url()); ?>AdminController/companyProfile" style="text-decoration: none;" >
	            	<input type="button" value="Back" style="background-color: #ff9966; color: white; padding: 6px 10px; text-align: center; font-size: 16px; border-radius: 8px;">
	          	</a>
				<input type="submit" name="update" value="Update" style="background-color: rgb(66, 184, 221); color: white; padding: 6px 10px; text-align: center; font-size: 16px; border-radius: 8px;">
			</form>

			<?php }  ?>

	      </div> 
	    </div>
	</div>
    <!-- /.container-fluid-->
    
</body>

</html>