<html>
<head>
	<title></title>
</head>
<body>
<form action='' method="POST">
Are you sure?
<br>
<input type ="submit" name="del" value="Delete" formaction="<?php echo base_url("AdminController/do_delete_carparts/").$item['CarPartsID']; ?>">
<input type="submit" name="back" value="Back" formaction="<?php echo base_url("AdminController/carparts");?>">
</form>

</body>
</html>