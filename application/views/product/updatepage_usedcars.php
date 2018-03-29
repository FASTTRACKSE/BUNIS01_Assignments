
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url("AdminController/do_update_usedcars/").$item['UsedCarsID']; ?>" method="POST">
Name: <input type="text" name="name" value="<?=$item['UsedCarsName']?>" ><br>
Price: <input type="text" name="price"  value="<?=$item['UsedCarsPrice']?>"><br>
Description: <input type="text" name="desc"  value="<?=$item['UsedCarsDesc']?>"><br>
Image: <input type="text" name="image"  value="<?=$item['UsedCarsImage']?>"><br>
<input type="submit" value="Update">
 
</table>
</form>