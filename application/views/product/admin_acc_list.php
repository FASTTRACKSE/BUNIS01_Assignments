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

  <table  style="width:50%" table  >

  <tr>
    <th>Insurance Name</th>
    <th>Insurance Price</th>
    <th>Insurance Description</th>
    <th>Insurance Image</th>
     <th> Edit</th>
      </tr>
             <a href="<?php echo  base_url('AdminController/insert_insurance/')?>">Insert</a>
            <?php foreach ($InsuranceID as $row)
  {
    ?>

                 

                    <?php echo "<tr>";?>
                   <?php echo "<td>". $row['InsuranceName']."</td>"  ;?>
                  

                  
                  <?php echo "<td>". $row['InsurancePrice'] ."</td>";?>
                  

                   
                   <?php echo "<td>". $row['InsuranceDesc'] ."</td>";?>
                  

                   
                    <?php echo "<td>". $row['InsuranceImage']. "</td>" ;?>
                     
                     
                 <?php echo "<td>" ?>
                
<a href="<?php echo  base_url('AdminController/update_insurance/').$row['InsuranceID'] ?>">Update</a>

<a href="<?php echo  base_url('AdminController/delete_insurance/').$row['InsuranceID'] ?>">Delete</a>     
               <?php echo "</td>" ?>
               <?php echo "</tr>";?>
              <?php  
  }
  ?>
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

         
      </table>

  </body>

</html>
