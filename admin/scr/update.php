<?php
// update article
session_start();
if(!isset($_SESSION['logged'])) {
  header("Location: ../../login.php");
  exit();
} else {
  require_once '../../database/database.php';
  $headline = $_POST['head'];
  $content = $_POST['con'];
  $author = $_POST['au'];

  $que = $db->prepare('UPDATE wpisy SET name=:headline, content=:content, author=:author WHERE name like :head;');
  $que->bindValue(':headline', $headline, PDO::PARAM_STR);
  $que->bindValue(':content', $content, PDO::PARAM_STR);
  $que->bindValue(':author', $author, PDO::PARAM_STR);
  $que->bindValue(':head', $_SESSION['headline'], PDO::PARAM_STR);
  $que->execute();
  unset($_SESSION['headline']);
  if($que) {
    $_SESSION['edit'] = "<span style='color: darkgreen; font-size: 20px;'>Edytowano wpis</span>";
    header("Location: ../edit.php");
    exit();
  } else {
    $_SESSION['edit-error'] = "<span style='color: red; font-size: 20px;'>Nie udało się edytować wpisu</span>";
    header("Location: ../edit.php");
  }
}
