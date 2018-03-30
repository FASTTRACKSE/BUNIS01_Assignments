<link href="<?php echo(base_url()); ?>assets/newspart/css/customLogin.css" rel="stylesheet">

<div class="login-page">
  <div class="form">
    <form class="login-form" action="<?php echo(base_url());?>index.php/LoginController/loginValidation" method="POST">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password" />
      <input style="background-color: #76b852" type="submit" value="LOGIN">
    </form>
  </div>
</div>