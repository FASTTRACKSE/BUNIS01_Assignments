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
    <th>CarParts Name</th>
    <th>CarParts Price</th>
    <th>CarParts Description</th>
    <th>CarParts Image</th>
     <th> Edit</th>
      </tr>
             <a href="<?php echo  base_url('AdminController/insert_carparts/') ?>">Insert</a>
            <?php foreach ($CarPartsID as $row)
  {
    ?>

                 

                    <?php echo "<tr>";?>
                   <?php echo "<td>". $row['CarPartsName']."</td>"  ;?>
                  

                  
                  <?php echo "<td>". $row['CarPartsPrice'] ."</td>";?>
                  

                   
                   <?php echo "<td>". $row['CarPartsDesc'] ."</td>";?>
                  

                   
                    <?php echo "<td>". $row['CarPartsImage']. "</td>" ;?>
                     
                     
                 <?php echo "<td>" ?>
                
<a href="<?php echo  base_url('AdminController/update_carparts/').$row['CarPartsID'] ?>">Update</a>

<a href="<?php echo  base_url('AdminController/delete_carparts/').$row['CarPartsID'] ?>">Delete</a>     
               <?php echo "</td>" ?>
               <?php echo "</tr>";?>
              <?php  
  }
  ?>
  <br>
  <a href="<?php echo  base_url('AdminController/insurance/') ?>">Insurance</a> <br>
  
    <a href="<?php echo  base_url('AdminController/usedcars/') ?>">Used Cars</a> <br>
     <a href="<?php echo  base_url('AdminController/acc/') ?>">Accessory</a> <br>
         <a href="<?php echo  base_url('AdminController/oil_fluid/') ?>">Oil and Fluid</a> <br>
         
      </table>

  </body>

</html>
