<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        	<a href="<?php echo(base_url()); ?>index.php/AdminController/companyProfile">Company Profiles</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
		<div class="row">
	      <div class="col-12">

			<?php foreach ($data as $d) {?>

			<?php echo form_open_multipart('AdminController/do_updatePartner/'.$d['id']);?>  
				<h3>Name</h3> 
				<input type="text" name="updateName" value="<?php echo $d['name']; ?>" required><br><br>
				<h3>Link</h3> 
				<input type="text" name="updateLink" value="<?php echo $d['link']; ?>" required><br><br>

				<h3>Image [150x50px]</h3> 
				<img src="<?php echo base_url().'/assets/company_profile/img/partners/'.$d['img']; ?>" width="150px" height="50px" >
				<?php echo $d['img'] ?><br>
				<br><input type="file" name="img_file" value="<?php echo($d['img']) ?>" ><br><br>

	         	<a href="<?php echo(base_url()); ?>index.php/AdminController/companyProfile" style="text-decoration: none;" >
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