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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>         

        <!-- Update Data -->
        <div>
          <h3>Data</h3>
          <table class="col-12" border="2" style="text-align: center;"> 
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
            <?php foreach($datas as $d): ?>
              <tr>
                <td><?php echo ($d['id']);?></td>
                <td><?php echo ($d['type']);?></td>
                <td><?php echo ($d['description']); ?></td>
                <td> <a href="#">Update</a></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>

        <!-- Update About -->
        <div>
          <h3>About</h3>
          <!-- <form action="<?php echo(base_url()); ?>index.php/AdminController/addAbout">
            <input type="submit" name="" value="Add About">
          </form> -->
          <a href="<?php echo(base_url()); ?>index.php/AdminController/addAbout">
             <input type="button" value="Add About">
          </a>
          <table class="col-12" border="2" style="text-align: center;"> 
            <th>ID</th>
            <th>Date</th>
            <th>Title</th>
            <th>Description</th>
            <th colspan="2">Actions</th>
            <?php foreach($about as $a): ?>
              <tr>
                <td><?php echo ($a['id']);?></td>
                <td><?php echo ($a['date']);?></td>
                <td><?php echo ($a['title']);?></td>
                <td><?php echo ($a['description']); ?></td>
                <td> <a href="#">Update</a></td>
                <td> <a href="#">Delete</a></td>

              </tr>
            <?php endforeach; ?>
          </table>
        </div>

        <!-- Update Staffs -->
        <div>
          <h3>Staffs</h3>
          <form>
            <input type="submit" name="addAbout" value="Add">
          </form>
          <table class="col-12" border="2" style="text-align: center;"> 
            <th>ID</th>
            <th>Name</th>
            <th>Job</th>
            <th>Image</th>
            <th>Image Name</th>
            <th>Twitter</th>
            <th>Facebook</th>
            <th>LinkedIn</th>
            <th colspan="2">Actions</th>
            <?php foreach($staffs as $s): ?>
              <tr>
                <td><?php echo ($s['id']);?></td>
                <td><?php echo ($s['name']);?></td>
                <td><?php echo ($s['job']);?></td>
                <td><img class="rounded-circle" style="width: 200px; height: 200px;" src="<?php echo base_url().'/assets/company_profile/img/team/'.$s['img']; ?>" alt=""></td>
                <td><?php echo ($s['img']); ?></td>
                <td><?php echo ($s['twitter']); ?></td>
                <td><?php echo ($s['facebook']); ?></td>
                <td><?php echo ($s['linkedin']); ?></td>
                <td> <a href="#">Update</a></td>
                <td> <a href="#">Delete</a></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>

        <!-- Update Partners -->
        <div>
          <h3>Partners</h3>
          <form>
            <input type="submit" name="addNews" value="Add">
          </form>
          <table class="col-12" border="2" style="text-align: center;"> 
            <th>ID</th>
            <th>Name</th>
            <th>Link</th>
            <th>Image</th>
            <th>Image Name</th>
            <th colspan="2">Actions</th>
            <?php foreach($partners as $p): ?>
              <tr>
                <td><?php echo ($p['id']);?></td>
                <td><?php echo ($p['name']);?></td>
                <td><?php echo ($p['link']);?></td>
                <td> <img class="img-fluid d-block mx-auto" src="<?php echo base_url().'/assets/company_profile/img/partners/'.$p['img']; ?>" alt=""></td>
                <td><?php echo ($p['img']); ?></td>
                <td> <a href="#">Update</a></td>
                <td> <a href="#">Delete</a></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>

      </div> 
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>