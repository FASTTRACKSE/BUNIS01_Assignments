html lang="vi">


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
      <table>
      	<tr>
			<textarea name="desc" form="productForm" placeholder="Enter product here . . ." required><?php echo($item['ProductDesc']) ?></textarea>	
		</tr>
		<form action="<?php echo(base_url());?>AdminController/do_update_product/<?php echo($item['ProductID']) ?>" method="POST" enctype="multipart/form-data" id="productForm">
			<tr>
				<td>Product Name</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="text" name="name" value="<?php echo($item['ProductName']) ?>" required></td>
			</tr>
			<td>Product Price</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="text" name="price"  value="<?php echo($item['ProductPrice']) ?>"></td>
			</tr>
			<tr>
			<tr>
				<td>Product Type
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="text" name="type"  value="<?php echo($item['ProductPrice']) ?>"></td>
			</tr>
			<tr>
				<td>Product Picture</td>
				<td> : </td>
				<td><input style="height: 30px; width: 200px" type="file" name="image" required value="<?php echo($item['ProductImage']) ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="Update"></td>
	</form>
				<form action="<?php echo(base_url());?>AdminController/getallproduct/">
					<td><input type="submit" name="" value="Back"></td>		
				</form>
			</tr>
	</table>
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>