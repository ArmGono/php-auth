<?php session_name('revweb'); session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Auth</title>
</head>
<body>
 <?php if(!isset($_SESSION['auth']) || !$_SESSION['auth']): ?>
    <form action="auth.php" method="POST">
      <div class="form-item">
        <label for="login">Login: </label>
        <input type="text" name="login">
      </div>
      <div class="form-item">
        <label for="password">Password: </label>
        <input type="password" name="password">
      </div>
      <div class="form-item">
        <input type="submit" value="Login">
      </div>
    </form>
    <?php if(isset($_SESSION['auth']) && !$_SESSION['auth']): ?>
      <div id="error">Неправильный логин или пароль.</div>
    <?php endif;?>

  <?php else: ?>
    <div id="welcome">Hello <?php print $_SESSION['name']; ?></div>
    <div id="logout"><a href="logout.php">Logout</a></div>
  <?php endif; ?>

</body>
</html>
