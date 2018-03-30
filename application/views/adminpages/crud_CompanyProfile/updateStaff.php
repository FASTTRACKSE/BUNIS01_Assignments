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

			<?php echo form_open_multipart('AdminController/do_updateStaff/'.$d['id']);?>  
				Name <br>
				<input type="text" name="updateName" value="<?php echo $d['name']; ?>" required><br><br>
				Job <br>
				<input type="text" name="updateJob" value="<?php echo $d['job']; ?>" required><br><br>
				Twitter <br>
				<input type="text" name="updateTwitter" value="<?php echo $d['twitter']; ?>" required><br><br>
				Facebook <br>
				<input type="text" name="updateFB" value="<?php echo $d['facebook']; ?>" required><br><br>
				Linkedin <br>
				<input type="text" name="updateLinkedin" value="<?php echo $d['linkedin']; ?>" required><br><br>

				Image [500x500] <br>
				<img src="<?php echo base_url().'/assets/company_profile/img/staffs/'.$d['img']; ?>" width="100" height="100" >
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