<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url("AdminController/do_insert_oil_fluid/"); ?>" method="POST">
Name: <input type="text" name="name" value='' ><br>
Price: <input type="text" name="price"  value=''><br>
Description: <input type="text" name="desc"  value=''><br>
Image: <input type="text" name="image"  value=''><br>


<input type="submit" value="Insert">
 
</table>
</form>
</body>
</html>