 <!DOCTYPE html>
<html lang="en">

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

    

  </head>
<style >
table, th, td {
    border: 1px solid black;
}
</style>
  <body>


    

        
<table  style="width:100%" table >

  <tr>
    <th>Used Cars Name</th>
    <th>Used Cars Price</th>
    <th>Used Cars Description</th>
    <th>Used Cars Image</th>
     <th> Edit</th>
      </tr>
             <a href="<?php echo  base_url('AdminController/insert_usedcars/')?>">Insert</a>
            <?php foreach ($UsedCarsID as $row)
  {
    ?>

                 

                    <?php echo "<tr>";?>
                   <?php echo "<td>". $row['UsedCarsName']."</td>"  ;?>
                  

                  
                  <?php echo "<td>". $row['UsedCarsPrice'] ."</td>";?>
                  

                   
                   <?php echo "<td>". $row['UsedCarsDesc'] ."</td>";?>
                  

                   
                    <?php echo "<td>". $row['UsedCarsImage']. "</td>" ;?>
                     
                     
                 <?php echo "<td>" ?>
                
<a href="<?php echo  base_url('AdminController/update_usedcars/').$row['UsedCarsID'] ?>">Update</a>

<a href="<?php echo  base_url('AdminController/delete_usedcars/').$row['UsedCarsID'] ?>">Delete</a>     
               <?php echo "</td>" ?>
               <?php echo "</tr>";?>
              <?php  
  }
  ?>
  <br>
   <a href="<?php echo  base_url('AdminController/insurance/') ?>">Insurance</a> <br>
   <a href="<?php echo  base_url('AdminController/carparts/') ?>">Car Parts  </a> <br>
    <a href="<?php echo  base_url('AdminController/oil_fluid/') ?>">Oil and Fluid</a> <br>
     <a href="<?php echo  base_url('AdminController/acc/') ?>">Accessory</a> <br>
      
      </table>

  </body>

</html>
