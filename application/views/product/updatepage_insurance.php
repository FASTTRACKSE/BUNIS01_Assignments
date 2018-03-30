
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url("AdminController/do_update_insurance/").$item['InsuranceID']; ?>" method="POST">
Name: <input type="text" name="name" value="<?=$item['InsuranceName']?>" ><br>
Price: <input type="text" name="price"  value="<?=$item['InsurancePrice']?>"><br>
Description: <input type="text" name="desc"  value="<?=$item['InsuranceDesc']?>"><br>
Image: <input type="text" name="image"  value="<?=$item['InsuranceImage']?>"><br>

<input type="submit" value="Update">
 
</table>
</form>
</body>
</html>