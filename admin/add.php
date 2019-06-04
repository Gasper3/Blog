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
</head>
<body>


</body>
</html>
