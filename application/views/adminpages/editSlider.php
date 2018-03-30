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
    <div class="row">
      <div class="col-12">
        <p>Homepage Edit</p>         

        <!-- Update Data -->
        <div>
          <h3>Image Slider</h3>
          <table border="2"> 
            <th>Image</th>
            <th>Actions</th>
            <?php 
            
             if($row_count<3){         
            ?>
            <a href="<?php echo  base_url('AdminController/insert_imageslider/')?>">Insert</a>
            <?php } ?>
            <?php foreach($id as $row): ?>
              <tr>

                <td><?php echo ($row['image']);?></td>
                <td> <a href="<?php echo base_url("AdminController/delete_imageslider/").$row['id']; ?>">Delete</a></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>

      </div> 
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>