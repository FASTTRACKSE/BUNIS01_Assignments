<html>
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
	<title></title>
</head>
<body>
<form action='' method="POST">
Are you sure?
<br>
<input type ="submit" name="del" value="Delete" formaction="<?php echo base_url("AdminController/do_delete_acc/").$item['AccessoryID']; ?>">
 <input type="submit" name="back" value="Back" formaction="<?php echo base_url("AdminController/getallproduct");?>">
</form>

</body>
</html>