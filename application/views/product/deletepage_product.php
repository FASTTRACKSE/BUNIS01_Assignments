<html lang="vi">


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
          <td>
            <form action="<?php echo(base_url());?>AdminController/getallproduct/">
              Are you sure to delete this product?
              <input style="background-color: green; color: white;" type="submit" name="" value="No">
            </form>  
          </td>
          <td>
            <form action="<?php echo(base_url());?>AdminController/do_delete_product/<?php echo($item['ProductID']) ?>">
              <input style="background-color: red; color: white;" type="submit" name="" value="Yes">
            </form>
          </td>
        </tr>
        
      </table>
      <h2><?php echo($item['ProductName']) ?></h2>
      <img style=" width: 100%; max-width: 500px; min-width: 100px; height: auto;" src="<?php echo(base_url()); ?>assets/image/product/<?php echo($item['ProductImage']); ?>">
      <p><?php echo($item['ProductDesc']) ?></p>
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>