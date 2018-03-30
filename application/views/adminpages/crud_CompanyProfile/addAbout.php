<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li> 
        <li class="breadcrumb-item active">
        	<a href="<?php echo(base_url()); ?>index.php/AdminController/CompanyProfile">Company Profiles</a>
        </li>
        <!-- <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li> -->
      </ol>

		
		<h3>Add New About</h3><br>
		
		<?php echo form_open_multipart('AdminController/insertAbout');?>
		<?php echo validation_errors(); ?>
		<!-- <?php echo $error ?> -->
			ID <br>
			<input type="text" name="aboutID"><br><br>
			Date <br>
			<input type="text" name="aboutDate"><br><br>
			Title <br>
			<input type="text" name="aboutTitle"><br><br>
			Description <br>
			<input type="text" name="aboutDesc"><br><br>
			Image <br>
			<input type="file" name="aboutImg" id="aboutImg"><br><br>
			<a href="<?php echo(base_url()); ?>index.php/AdminController/CompanyProfile">
			   <input type="button" value="Back" />
			</a>
			<input type="submit" name="submit" value="Submit">
		</form>

    </div>
    <!-- /.container-fluid-->
    
</body>

</html>