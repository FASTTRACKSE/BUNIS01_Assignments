<html>
<head>
	<title></title>
</head>
<body>
<form action='' method="POST">
Are you sure?
<br>
<input type ="submit" name="del" value="Delete" formaction="<?php echo base_url("AdminController/do_delete_oil_fluid/").$item['OilandFluidID']; ?>">
<input type="submit" name="back" value="Back" formaction="<?php echo base_url("AdminController/oil_fluid");?>">
</form>

</body>
</html>