<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo(base_url()); ?>index.php/AdminController/CompanyProfile">Company Profile</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
    <div class="row">
      <div class="col-12">
        <h3>Add New Staff</h3> <br>
        
        <?php echo form_open_multipart('AdminController/addStaff'); ?>       
        <!-- <?php echo $error; ?> -->
          Name <br>
          <input type="text" name="staffName" required><br><br>
          Job <br>
          <input type="text" name="staffJob" required><br><br>
          Twitter <br>
          <input type="text" name="staffTwitter" required><br><br>
          Facebook <br>
          <input type="text" name="staffFB" required><br><br>
          Linkedin <br>
          <input type="text" name="staffLinkedin" required><br><br>
          Image [500x500] <br>
          <input type="file" name="img_file" id="img_file" required>
          <br><br>
          <a href="<?php echo(base_url()); ?>index.php/AdminController/CompanyProfile">
             <input type="button" value="Back" />
          </a>
          <input type="submit" name="submit" value="Submit">
        </form>

      </div> 
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>