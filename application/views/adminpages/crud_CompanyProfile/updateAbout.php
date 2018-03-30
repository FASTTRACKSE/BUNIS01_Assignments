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

			<?php echo form_open_multipart('AdminController/do_updateAbout/'.$d['id']);?>     
				Date <br>
				<input type="text" name="updateDate" value="<?php echo $d['date']; ?>" required><br><br>
				Title <br>
				<input type="text" name="updateTitle" value="<?php echo $d['title']; ?>" required><br><br>
				Description <br>
				<textarea name="updateDesc" required><?php echo($d['description']) ?></textarea><br><br>

				Image [200x200] <br>
				<img src="<?php echo base_url().'/assets/company_profile/img/about/'.$d['img']; ?>" width="100" height="100" >
				<input type="file" name="img_file" ><br><br>

				<a href="<?php echo(base_url()); ?>index.php/AdminController" style="text-decoration: none;" >
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