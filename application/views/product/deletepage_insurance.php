<html>
<head>
	<title></title>
</head>
<body>
<form action='' method="POST">
Are you sure?
<br>
<input type ="submit" name="del" value="Delete" formaction="<?php echo base_url("AdminController/do_delete_insurance/").$item['InsuranceID']; ?>">
<input type="submit" name="back" value="Back" formaction="<?php echo base_url("AdminController/insurance");?>">
</form>

</body>
</html>