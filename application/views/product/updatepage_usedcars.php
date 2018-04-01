
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

<form action="<?php echo base_url("AdminController/do_update_usedcars/").$item['UsedCarsID']; ?>" enctype="multipart/form-data" method="POST">
Name: <input type="text" name="name" value="<?=$item['UsedCarsName']?>" ><br>
Price: <input type="text" name="price"  value="<?=$item['UsedCarsPrice']?>"><br>
Description: <input type="text" name="desc"  value="<?=$item['UsedCarsDesc']?>"><br>
Image: <input type="file" name="image"  value="<?=$item['UsedCarsImage']?>"><br>
<input type="submit" value="Update">
  <input type="submit" name="back" value="Back" formaction="<?php echo base_url("AdminController/getallproduct");?>">
</table>
</form>