<?php
  session_start();
  if(isset($_SESSION['logged'])) {
    header("Location: admin/admin.php");
    exit();
  }
?>
<html>
<head>
  <title>Logowanie</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="style/login_style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1 class="header">Sign in</h1>
    </header>


      <form method="post" action="scr/php_login.php">
        <p class="info">Username</p>
        <input type="text" name="username" class="field" <?= (isset($_SESSION['error_user'])) ? 'value="'.$_SESSION['user'].'"' : ''?>>
        <p class="info">Password</p>
        <input type="password" name="pass" class="field">
        <p><input type="submit" name="button" value="Login" class="baton"></p>
        <?php
          if(isset($_SESSION['error_user'])) {
           echo $_SESSION['error_user'];
           unset($_SESSION['error_user']);
          }
        ?>
      </form>

  </div>

</body>
</html>
