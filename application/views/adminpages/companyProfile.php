<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
    <div class="row">
      <div class="col-12">
        <!-- Data -->
        <div>
          <hr style="border-width: 10px;">
          <h3 align="center">Data</h3>
          <hr style="border-width: 10px;">
          <table class="col-12" border="2" style="text-align: center;"> 
            <th style="background-color: black; color: white;">No</th>
            <th style="background-color: black; color: white;">Name</th>
            <th style="background-color: black; color: white;">Description</th>
            <th style="background-color: black; color: white;">Actions</th>
            <?php foreach($datas as $d): ?>
              <tr>
                <td><?php echo ($d['id']);?></td>
                <td><?php echo ($d['type']);?></td>
                <td><?php echo ($d['description']); ?></td>
                <td> <a href="<?php echo(base_url()); ?>index.php/AdminController/updateData/<?php echo($d['id']) ?>" style="background-color: rgb(66, 184, 221); color: white; padding: 6px 10px; text-align: center; font-size: 16px; border-radius: 8px;">Update</a></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>

        <!-- About -->
        <div ">
          <hr style="border-width: 10px;  margin-top:50px;">
          <h3 align="center">About</h3>
          <hr style="border-width: 10px;">
          <a href="<?php echo(base_url()); ?>index.php/AdminController/addAbout">
             <input type="button" value="Add New Data About" style="float: right; margin-bottom:15px; background-color: #ff9900; color: white; padding: 10px 24px; text-align: center; font-size: 16px; border-radius: 8px;">
          </a>
          <table class="col-12" border="2" style="text-align: center;"> 
            <th style="background-color: black; color: white;">ID</th>
            <th style="background-color: black; color: white;">Date</th>
            <th style="background-color: black; color: white;">Title</th>
            <th style="background-color: black; color: white;">Description</th>
            <th style="background-color: black; color: white;">Image</th>
            <th style="background-color: black; color: white;">Actions</th>
            <?php foreach($about as $a): ?>
              <tr>
                <td><?php echo ($a['id']);?></td>
                <td><?php echo ($a['date']);?></td>
                <td><?php echo ($a['title']);?></td>
                <td><?php echo ($a['description']); ?></td>
                <td><img class="rounded-circle" width="150px"; height="150px"; src="<?php echo base_url().'/assets/company_profile/img/about/'.$a['img']; ?>" alt=""></td>
                <td> 
                  <a href="<?php echo(base_url()); ?>index.php/AdminController/updateAbout/<?php echo($a['id']) ?>" style="background-color: rgb(66, 184, 221); color: white; padding: 6px 10px; text-align: center; font-size: 16px; border-radius: 8px;" >Update
                  </a><br><br>
                  <a href="<?php echo(base_url()); ?>index.php/AdminController/deleteAbout/<?php echo($a['id']) ?>" style="background-color: #e60000; color: white; padding: 6px 10px; margin:10px; text-align: center; font-size: 16px; border-radius: 8px;" >Delete
                  </a>
                </td>

              </tr>
            <?php endforeach; ?>
          </table>
        </div>

        <!-- Staffs -->
        <div>
          <hr style="border-width: 10px;  margin-top:50px;">
          <h3 align="center">Staffs</h3>
          <hr style="border-width: 10px;">
          <a href="<?php echo(base_url()); ?>index.php/AdminController/addStaff">
             <input type="button" value="Add New Staff" style="float: right; margin:15px; background-color: #ff9900; color: white; padding: 10px 24px; text-align: center; font-size: 16px; border-radius: 8px;">
          </a>
          <table class="col-12" border="2" style="text-align: center;"> 
            <th style="background-color: black; color: white;">ID</th>
            <th style="background-color: black; color: white;">Name</th>
            <th style="background-color: black; color: white;">Job</th>
            <th style="background-color: black; color: white;">Image</th>
            <th style="background-color: black; color: white;">Twitter</th>
            <th style="background-color: black; color: white;">Facebook</th>
            <th style="background-color: black; color: white;">LinkedIn</th>
            <th style="background-color: black; color: white;" colspan="2">Actions</th>
            <?php foreach($staffs as $s): ?>
              <tr>
                <td><?php echo ($s['id']);?></td>
                <td><?php echo ($s['name']);?></td>
                <td><?php echo ($s['job']);?></td>
                <td><img class="rounded-circle" width="150px"; height="150px"; src="<?php echo base_url().'/assets/company_profile/img/staffs/'.$s['img']; ?>" alt=""></td>
                <td><?php echo ($s['twitter']); ?></td>
                <td><?php echo ($s['facebook']); ?></td>
                <td><?php echo ($s['linkedin']); ?></td>
                <td> 
                  <a href="<?php echo(base_url()); ?>index.php/AdminController/updateStaff/<?php echo($s['id']) ?>" style="background-color: rgb(66, 184, 221); color: white; padding: 6px 10px; margin: 10px; text-align: center; font-size: 16px; border-radius: 8px;" >Update
                  </a><br><br>
                  <a href="<?php echo(base_url()); ?>index.php/AdminController/deleteStaff/<?php echo($s['id']) ?>" style="background-color: #e60000; color: white; padding: 6px 10px; margin:10px; text-align: center; font-size: 16px; border-radius: 8px;" >Delete
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>

        <!-- Partners -->
        <div>
          <hr style="border-width: 10px;  margin-top:50px;">
          <h3 align="center">Partners</h3>
          <hr style="border-width: 10px;">
          <a href="<?php echo(base_url()); ?>index.php/AdminController/addPartner">
             <input type="button" value="Add New Partner" style="float: right; margin:15px; background-color: #ff9900; color: white; padding: 10px 24px; text-align: center; font-size: 16px; border-radius: 8px;">
          </a>
          <table class="col-12" border="2" style="text-align: center;"> 
            <th style="background-color: black; color: white;">ID</th>
            <th style="background-color: black; color: white;">Name</th>
            <th style="background-color: black; color: white;">Link</th>
            <th style="background-color: black; color: white;">Image</th>
            <th style="background-color: black; color: white;" colspan="2">Actions</th>
            <?php foreach($partners as $p): ?>
              <tr>
                <td><?php echo ($p['id']);?></td>
                <td><?php echo ($p['name']);?></td>
                <td><?php echo ($p['link']);?></td>
                <td> <img width="150px"; height="50px"; src="<?php echo base_url().'/assets/company_profile/img/partners/'.$p['img']; ?>" ></td>
                <td> 
                  <a href="<?php echo(base_url()); ?>index.php/AdminController/updatePartner/<?php echo($p['id']) ?>" style="background-color: rgb(66, 184, 221); color: white; padding: 6px 10px; margin: 10px; text-align: center; font-size: 16px; border-radius: 8px;" >Update
                  </a>
                  <a href="<?php echo(base_url()); ?>index.php/AdminController/deletePartner/<?php echo($p['id']) ?>" style="background-color: #e60000; color: white; padding: 6px 10px; margin:10px; text-align: center; font-size: 16px; border-radius: 8px;" >Delete
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>

      </div> 
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>