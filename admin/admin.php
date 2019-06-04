<?php
session_start();
if(!isset($_SESSION['logged'])) {
  header("Location: ../login.php");
  exit();
}
?>
<html>
<head>
   <title>Panel administracyjny</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style_admin.css">
</head>
<body>
  <div class="container">
    <header>
      <span class="admin">Admin</span>
      <a href="../logout.php" class="admin"><img src="../img/logout.png" class="icon"></a>
    </header>
    <ul>
      <li><span class="nav">NAWIGACJA</span></li>
      <li><a href="">Wyświetl wszystkie</a></li>
      <li><a href="">Dodaj wpis</a></li>
      <li><a href="">Edytuj wpis</a></li>
      <li><a href="">Usuń wpis</a></li>
      <li><span class="nav">SZUKAJ</span></li>
      <li><input type="text" class="search"></li>
    </ul>
  </div>
  <div class="main">
    <span class="copyright">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></span>
  </div>

</body>
</html>
