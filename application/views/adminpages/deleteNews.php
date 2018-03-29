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
      <table>
        <tr>
          <td>
            <form action="<?php echo(base_url());?>index.php/AdminController/news/">
              Are you sure to delete this news?
              <input style="background-color: green; color: white;" type="submit" name="" value="No">
            </form>  
          </td>
          <td>
            <form action="<?php echo(base_url());?>index.php/AdminController/deleteNews/<?php echo($news['id']) ?>">
              <input style="background-color: red; color: white;" type="submit" name="" value="Yes">
            </form>
          </td>
        </tr>
        
      </table>
      <h2><?php echo($news['title']) ?></h2>
      <img style=" width: 100%; max-width: 500px; min-width: 100px; height: auto;" src="<?php echo(base_url()); ?>assets/newspart/img/news/<?php echo($news['imageNews']); ?>">
      <p><?php echo($news['newsDescription']) ?></p>
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>