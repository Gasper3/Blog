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

    <footer>
      <h5>Made by Gasper3</h5>
        <span class="copyright">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></span>
    </footer>
  </div>
  <div class="main">
    <form method="post" action="edit.php">
      <h2>Wybierz tytuł wpisu</h2>
      <!-- LISTA Z TYTULAMI WPISOW -->
      <?php
        require_once '../database/database.php';
        $que = $db->query('SELECT name from wpisy;');
        $headlines = $que->fetchAll();
        echo "<select name='list' class='list'>";
        foreach($headlines as $head) {
          echo "<option value='".$head['name']."'>".$head['name']."</option>";
        }
        echo "</select>";
      ?>
      <p><input type="submit" value="Edytuj" name='buton'></p>
    </form>
    <form method="post" action="scr/update.php">
    <!-- PANEL EDYCYJNY -->
      <?php
        if(isset($_POST['buton'])) {
          require_once '../database/database.php';
          $headline = $_POST['list'];
          echo $headline;
          $_SESSION['headline']=$headline;
          $que = $db->prepare('SELECT name, content, author from wpisy where name like :headline;');
          $que->bindValue(":headline", $headline, PDO::PARAM_STR);
          $que->execute();
          $blog = $que->fetch(PDO::FETCH_ASSOC);
          echo "<h2>Nagłówek</h2>";
          echo "<input class='headline' type='text' name='head' value='{$blog["name"]}'>";
          echo "<h2>Zawartość wpisu</h2>";
          echo "<textarea class='content' name='con'>{$blog['content']}</textarea>";
          echo "<h2>Autor</h2>";
          echo "<input type='text' name='au' class='headline' value='{$blog['author']}'>";
          echo "<p><input type='submit' value='Edytuj wpis' class='adding' name='add'></p>";
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
