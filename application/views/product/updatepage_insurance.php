
<html>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
      </ol>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url("AdminController/do_update_insurance/").$item['InsuranceID']; ?>"  enctype="multipart/form-data" method="POST">
Name: <input type="text" name="name" value="<?=$item['InsuranceName']?>" ><br>
Price: <input type="text" name="price"  value="<?=$item['InsurancePrice']?>"><br>
Description: <input type="text" name="desc"  value="<?=$item['InsuranceDesc']?>"><br>
Image: <input type="file" name="image"  value="<?=$item['InsuranceImage']?>"><br>
 <input type="submit" name="back" value="Back" formaction="<?php echo base_url("AdminController/getallproduct");?>">
<input type="submit" value="Update">
 
</table>
</form>
</body>
</html>