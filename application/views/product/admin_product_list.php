
 <!DOCTYPE html>
<html lang="en">

 




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
       <head>

    

  </head>
<style >
table, th, td {
    border: 1px solid black;
}
</style>
  <body>


    

        
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
  <br>
   <a href="<?php echo  base_url('AdminController/carparts/') ?>">Car Parts </a> <br>
    <a href="<?php echo  base_url('AdminController/usedcars/') ?>">Used Cars</a> <br>
     <a href="<?php echo  base_url('AdminController/acc/') ?>">Accessory</a> <br>
         <a href="<?php echo  base_url('AdminController/oil_fluid/') ?>">Oil and Fluid</a> <br>
       
      </table>

  </body>
    <!-- /.container-fluid-->
    
</body>

</html>
</html>


