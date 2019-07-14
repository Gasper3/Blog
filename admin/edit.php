<?php
session_start();
if(!isset($_SESSION['logged'])) {
  header("Location: ../login.php");
  exit();
}
?>
<html>
<head>
   <title>Edytowanie</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" href="style/edit.css">
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
      <li><a href="add.php">Dodaj wpis</a></li>
      <li><a href="edit.php" style="color: white;">Edytuj wpis</a></li>
      <li><a href="del.php">Usuń wpis</a></li>
      <li><span class="nav">SZUKAJ</span></li>
      <li><input type="text" class="search"></li>
    </ul>
    <?php
      require_once 'scr/footer.php';
    ?>
  </div>
  <div class="main">
    <form method="post" action="edit.php">
      <h2>Wybierz tytuł wpisu</h2>
      <!-- LISTA Z TYTULAMI WPISOW -->
      <?php
      require_once 'scr/titles.php';
      ?>
    </form>

    <form method="post" action="scr/update.php">
    <!-- PANEL EDYCYJNY -->
      <?php
        if(isset($_POST['buton'])) {
          require_once 'scr/post-panel.php';
        }
      ?>
    </form>

    <?php
    // WYSWIETLENIE KOMUNIKATU
      if(isset($_SESSION['edit'])) {
        echo $_SESSION['edit'];
        unset($_SESSION['edit']);
      }
      if(isset($_SESSION['edit-error'])) {
        echo $_SESSION['edit-error'];
        unset($_SESSION['edit-error']);
      }
    ?>
  </div>

</body>
</html>
