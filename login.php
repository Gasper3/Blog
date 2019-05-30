<?php
  session_start();
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


      <form method="post" action="php_login.php">
        <p class="info">Name</p>
        <input type="text" name="name" class="field">
        <p class="info">Password</p>
        <input type="password" name="pass" class="field">
        <p><input type="submit" name="button" value="Login" class="baton"></p>
      </form>

  </div>

</body>
</html>
