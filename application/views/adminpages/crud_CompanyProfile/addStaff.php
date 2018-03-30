<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo(base_url()); ?>index.php/AdminController/companyProfile">Company Profile</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
      <div class="row">
        <div class="col-12">
          <?php echo form_open_multipart('AdminController/addStaff'); ?>       
            <h5>Name</h5> 
            <input type="text" name="staffName" required><br><br>
            <h5>Job</h5> 
            <input type="text" name="staffJob" required><br><br>
            <h5>Twitter</h5> 
            <input type="text" name="staffTwitter" required><br><br>
            <h5>Facebook</h5> 
            <input type="text" name="staffFB" required><br><br>
            <h5>Linkedin</h5> 
            <input type="text" name="staffLinkedin" required><br><br>
            <h5>Image [500x500px]</h5> 
            <input type="file" name="img_file" id="img_file" required>
            <br><br>
            <a href="<?php echo(base_url()); ?>index.php/AdminController/companyProfile" style="text-decoration: none;" >
                <input type="button" value="Back" style="background-color: #ff9966; color: white; padding: 6px 10px; text-align: center; font-size: 16px; border-radius: 8px;">
            </a>
            <input type="submit" name="submit" value="Submit" style="background-color: rgb(66, 184, 221); color: white; padding: 6px 10px; text-align: center; font-size: 16px; border-radius: 8px;">
          </form>

          </div> 
        </div>
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>