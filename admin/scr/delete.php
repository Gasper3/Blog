<?php
session_start();
if(!isset($_SESSION['logged'])) {
  header("Location: ../../login.php");
  exit();
} else {
  require_once '../../database/database.php';

  $que = $db->prepare('DELETE FROM wpisy WHERE name like :head;');
  $que->bindValue(':head', $_SESSION['headline'], PDO::PARAM_STR);
  $que->execute();
  unset($_SESSION['headline']);
  if($que) {
    $_SESSION['edit'] = "<span style='color: darkgreen; font-size: 20px;'>Usunięto wpis</span>";
    header("Location: ../del.php");
    exit();
  } else {
    $_SESSION['edit-error'] = "<span style='color: red; font-size: 20px;'>Nie udało się usunąć wpisu</span>";
    header("Location: ../del.php");
  }
}
