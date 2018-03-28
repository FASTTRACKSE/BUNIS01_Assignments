<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url("Product_Controller/update/").$item['UsedCarsID']; ?>" method="POST">
Name: <input type="text" name="name" value="<?=$item['UsedCarsName']?>" ><br>
Price: <input type="text" name="price"  value="<?=$item['UsedCarsPrice']?>"><br>


<input type="submit" value="Update">
 
</table>
</form>
</body>
</html>
