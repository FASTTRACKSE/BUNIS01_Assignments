<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>

	<form action="<?php echo base_url() ?>index.php/AdminController/insertService" method="POST"
    enctype="multipart/form-data">
 	<div class="container">
 		<label><b>Name</b></label>
    	<input type="text" placeholder="Enter service Name" name="fName" required>
    	<br>
    	<label><b>Description</b></label>
    	<input type="text" placeholder="Enter service Description" name="fDesc" required>
    	<br>
    	<label><b>Tag</b></label>
    	<input type="text" placeholder="Enter service Tag" name="fTag" required>
    	<br>
        <label for="pic_file">Select Image*:</label>
        <input type="file" name="picFile" class="form-control"  id="picFile">
        <br>

    	<div class="clearfix">
     	<input type="submit" name="submitBtn" value="Register">
     </div>
 </div>
</form>
 </div>
    <!-- /.container-fluid-->
    
</body>
</html>