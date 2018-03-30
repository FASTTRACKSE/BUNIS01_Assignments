
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
    <th>Oil and Fluid Name</th>
    <th>Oil and Fluid Price</th>
    <th>Oil and Fluid Description</th>
    <th>Oil and Fluid Image</th>
     <th> Edit</th>
      </tr>
             <a href="<?php echo  base_url('AdminController/insert_oil_fluid/')?>">Insert</a>
            <?php foreach ($OilandFluidID as $row)
  {
    ?>

                 

                    <?php echo "<tr>";?>
                   <?php echo "<td>". $row['OilandFluidName']."</td>"  ;?>
                  

                  
                  <?php echo "<td>". $row['OilandFluidPrice'] ."</td>";?>
                  

                   
                   <?php echo "<td>". $row['OilandFluidDesc'] ."</td>";?>
                  

                   
                    <?php echo "<td>". $row['OilandFluidImage']. "</td>" ;?>
                     
                     
                 <?php echo "<td>" ?>
                
<a href="<?php echo  base_url('AdminController/update_oil_fluid/').$row['OilandFluidID'] ?>">Update</a>

<a href="<?php echo  base_url('AdminController/delete_oil_fluid/').$row['OilandFluidID'] ?>">Delete</a>     
               <?php echo "</td>" ?>
               <?php echo "</tr>";?>
              <?php  
  }
  ?>
  <br>
   <a href="<?php echo  base_url('AdminController/insurance/') ?>">Insurance</a> <br>
   <a href="<?php echo  base_url('AdminController/carparts/') ?>">Car Parts </a> <br>
    <a href="<?php echo  base_url('AdminController/usedcars/') ?>">Used Cars</a> <br>
     <a href="<?php echo  base_url('AdminController/acc/') ?>">Accessory</a> <br>
       
       
      </table>

  </body>

</html>
