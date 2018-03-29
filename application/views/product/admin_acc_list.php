<!DOCTYPE html>
<html lang="en">

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
    <th>Accessory Name</th>
    <th>Accessory Price</th>
    <th>Accessory Description</th>
    <th>Accessory Image</th>
     <th> Edit</th>
      </tr>
             <a href="<?php echo  base_url('AdminController/insert_acc')?>">Insert</a>
            <?php foreach ($AccessoryID as $row)
  {
    ?>

                 

                    <?php echo "<tr>";?>
                   <?php echo "<td>". $row['AccessoryName']."</td>"  ;?>
                  

                  
                  <?php echo "<td>". $row['AccessoryPrice'] ."</td>";?>
                  

                   
                   <?php echo "<td>". $row['AccessoryDesc'] ."</td>";?>
                  

                   
                    <?php echo "<td>". $row['AccessoryImage']. "</td>" ;?>
                     
                     
                 <?php echo "<td>" ?>
                <a href="<?php echo  base_url('AdminController/update_acc/').$row['AccessoryID'] ?>">Update</a>

                <a href="<?php echo  base_url('AdminController/delete_acc/').$row['AccessoryID'] ?>">Delete</a> 
   
               <?php echo "</td>" ?>
               <?php echo "</tr>";?>
              <?php  
  }
  ?>
  <br>
  <a href="<?php echo  base_url('AdminController/insurance/') ?>">Insurance</a> <br>
   <a href="<?php echo  base_url('AdminController/carparts/') ?>">Car Parts </a> <br>
    <a href="<?php echo  base_url('AdminController/usedcars/') ?>">Used Cars</a> <br>
 
         <a href="<?php echo  base_url('AdminController/oil_fluid/') ?>">Oil and Fluid</a> <br>
         
      </table>

  </body>

</html>
