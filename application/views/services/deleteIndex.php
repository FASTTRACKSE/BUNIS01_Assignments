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
        <li class="breadcrumb-item active"> <?php echo($headerTitle); ?> </li>
      </ol>
		<table>
			<tr>
				<td><h6>are you sure you want to delete this?</h6></td>
				<td>
					<form action="<?php echo base_url("index.php/AdminController/deleteService/").$row['ID'];?>" enctype="multipart/form-data" method="POST">
			     		<input type="submit" name="" value="YES">	
			     	</form>
				</td>
				<td>
					<form action="<?php echo base_url() ?>index.php/AdminController/viewAdminService/">
			     		<input type="submit" name="" value="NO">
			     	</form>
				</td>
			</tr>
			

		</table>    	
</div>
    <!-- /.container-fluid-->
    
</body>
</html>