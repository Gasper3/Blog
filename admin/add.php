<?php
  session_start();
  if(!isset($_SESSION['logged'])) {
    header("Location: ../login.php");
    exit();
  }

?>
<html>
<head>
  <title>Dodaj wpis</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/add.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="../img/blog.png"/>
</head>
<body>
  <div class="container">
    <header>
      <a href="admin.php" class=admin>Admin</a>
      <a href="scr/logout.php" class="admin"><img src="../img/logout.png" class="icon"></a>
    </header>
    <ul>
      <li><span class="nav">NAWIGACJA</span></li>
      <li><a href="all.php">Wyświetl wszystkie</a></li>
      <li><a href="add.php" style="color: white;">Dodaj wpis</a></li>
      <li><a href="edit.php">Edytuj wpis</a></li>
      <li><a href="del.php">Usuń wpis</a></li>
      <li><span class="nav">SZUKAJ</span></li>
      <li><input type="text" class="search"></li>
    </ul>

    <footer>
      <h5>Made by Gasper3</h5>
        <span class="copyright">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></span>
    </footer>
  </div>
  <div class="main">
    <form method="post" action='scr/php_add.php'>
      <h2>Nagłówek</h2>
      <input type="text" name='headline' class='headline'>
      <h2>Zawartość wpisu</h2>
      <textarea name="content" class="content"></textarea>
      <h2>Autor</h2>
      <input type="text" name='author' class='headline'>
      <p><input type="submit" value="Dodaj wpis" class="adding" name="add"></p>
      <?php
        if(isset($_SESSION['added'])) {
          echo $_SESSION['added'];
          unset($_SESSION['added']);
        }
        if(isset($_SESSION['add-error'])) {
          echo $_SESSION['add-error'];
          unset($_SESSION['add-error']);
        }
      ?>
    </form>


  </div>


</body>
</html>
