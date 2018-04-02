<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        	<a href="<?php echo(base_url()); ?>AdminController/companyProfile">Company Profile</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
		<div class="row">
	      <div class="col-12">
			<?php foreach ($data as $d) {?>

			<table border="2" align="center">
			  <tr>
			    <th style="padding: 15px;">Name</th>
			    <td style="padding: 15px;"><?php echo $d['name'] ?></td> 
			  </tr>
			  <tr>
			    <th style="padding: 15px;">Link</th>
			    <td style="padding: 15px;"><?php echo $d['link'] ?></td>
			  </tr>
			  <tr>
			    <th style="padding: 15px;">Image</th>
			    <td style="padding: 15px;">
			    	<img src="<?php echo base_url().'/assets/company_profile/img/partners/'.$d['img']; ?>" width="150px" height="50px" >
			    	<?php echo $d['img'] ?>
			    </td>
			  </tr>
			</table>

			<div class="col-12"  style="text-align: center;">
				<br><h4>Are you sure to delete this partner?</h4>
			
				<a href="<?php echo(base_url()); ?>AdminController/companyProfile" style="padding: 50px;">
	            	<input style="background-color: green; color: white; font-size: 20px;" type="button" value="No" />
	          	</a>

	          	<a href="<?php echo(base_url());?>AdminController/do_deletePartner/<?php echo($d['id']) ?>" style="padding: 50px;">
	            	<input style="background-color: red; color: white; font-size: 20px;" type="button" value="Yes" />
	          	</a>
			</div>
			
			<?php }  ?>

	      </div> 
	    </div>
	</div>
    <!-- /.container-fluid-->
    
</body>

</html>