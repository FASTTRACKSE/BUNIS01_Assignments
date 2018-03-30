<html>
<html lang="vi">

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
        </ol>

      <form action="<?php echo base_url("AdminController/create_imageslider/"); ?>" enctype="multipart/form-data"  method="POST">

      Image: <input type="file" name="image"  value=''><br>


      <input type="submit" value="Insert">
 
</table>
</form>
</body>
</html>