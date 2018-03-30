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

			<?php foreach ($data as $d) {?>

			<?php echo form_open_multipart('AdminController/do_updatePartner/'.$d['id']);?>  
				Name <br>
				<input type="text" name="updateName" value="<?php echo $d['name']; ?>" required><br><br>
				Link <br>
				<input type="text" name="updateLink" value="<?php echo $d['link']; ?>" required><br><br>

				Image [150x50] <br>
				<img src="<?php echo base_url().'/assets/company_profile/img/partners/'.$d['img']; ?>" width="150px" height="50px" >
				<input type="file" name="img_file" value="<?php echo($d['img']) ?>" ><br><br>

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