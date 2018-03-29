<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url("Product_Controller/do_update_acc/").$item['AccessoryID']; ?>" method="POST">
Name: <input type="text" name="name" value="<?=$item['AccessoryName']?>" ><br>
Price: <input type="text" name="price"  value="<?=$item['AccessoryPrice']?>"><br>
Description: <input type="text" name="desc"  value="<?=$item['AccessoryDesc']?>"><br>

<input type="submit" value="Update">
 
</table>
</form>
</body>
</html>