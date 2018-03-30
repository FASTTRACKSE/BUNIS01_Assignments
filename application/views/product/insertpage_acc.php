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
<head>
	
</head>
<body>

<form action="<?php echo base_url("AdminController/do_insert_acc/"); ?>" enctype="multipart/form-data" method="POST">
Name: <input type="text" name="name" value='' ><br>
Price: <input type="text" name="price"  value=''><br>
Description: <input type="text" name="desc"  value=''><br>
Image: <input type="file" name="image"  value=''><br>


<input type="submit" value="Insert">
 
</table>
</form>
</body>
</html>