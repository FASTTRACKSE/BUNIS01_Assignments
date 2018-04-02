<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>

      <table>
      	<form action="<?php echo(base_url());?>adminController/changePassword" method="POST">
      		<tr>
      			<td>Username</td>
      			<td><input type="text" name="username" value="<?php echo($admin['username']); ?>"></td>
      		</tr>
          <tr>
            <td>New Password</td>
            <td><input type="password" name="password" placeholder="New Password Here"></td>
          </tr>
          <tr>
            <td><input type="submit" name="" value="Submit"></td>
          </tr>
      	</form>
      	
      </table>
      
    </div>
    <!-- /.container-fluid-->
    
</body>

</html>