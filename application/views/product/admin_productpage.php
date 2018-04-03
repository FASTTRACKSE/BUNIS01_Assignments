<!DOCTYPE html>
<html lang="en">



<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
      
<style >
table, th, td {
    border: 1px solid black;
}
</style>
  <body>


    

        
<table  style="width:100%" table >
  <tr>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Description</th>
    <th>Product Image</th>
     <th> Edit</th>
      </tr>
             <a href="<?php echo  base_url('AdminController/insert_acc')?>">Insert</a>
            <?php foreach ($item as $row)
  {
    ?>

                 

                    <?php echo "<tr>";?>
                   <?php echo "<td>". $row['ProductName']."</td>"  ;?>
                  

                  
                  <?php echo "<td>". $row['ProductPrice'] ."</td>";?>
                  

                   
                   <?php echo "<td>". $row['ProductDesc'] ."</td>";?>
                  

                   
                    <?php echo "<td>". $row['ProductImage']. "</td>" ;?>
                     
                     
                 <?php echo "<td>" ?>
                <a href="<?php echo  base_url('AdminController/update_acc/').$row['ProductID'] ?>">Update</a>

                <a href="<?php echo  base_url('AdminController/delete_acc/').$row['ProductID'] ?>">Delete</a> 
   
               <?php echo "</td>" ?>
               <?php echo "</tr>";?>
              <?php  
  }
  ?>


         
      </table>
      
          <div>
            <?php echo $this->pagination->create_links(); ?>
          </div>

  </body>

</html>