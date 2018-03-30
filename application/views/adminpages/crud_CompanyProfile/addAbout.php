<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li> 
        <li class="breadcrumb-item">
        	<a href="<?php echo(base_url()); ?>index.php/AdminController/CompanyProfile">Company Profiles</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>

		<h3>Add New About</h3><br>
		
		<?php echo form_open_multipart('AdminController/addAbout');?>
		<!-- <?php echo $error; ?> -->
			Date <br>
			<input type="text" name="aboutDate" required><br><br>
			Title <br>
			<input type="text" name="aboutTitle" required><br><br>
			Description <br>
			<input type="text" name="aboutDesc" required><br><br>
			Image [200x200] <br>
			<input type="file" name="img_file" id="img_file" required> 
			<br><br>
			<a href="<?php echo(base_url()); ?>index.php/AdminController/CompanyProfile">
			   <input type="button" value="Back" />
			</a>
			<input type="submit" name="submit" value="Submit">
		</form>

    </div>
    <!-- /.container-fluid-->
    
</body>

</html>