<?php
session_start();
if(!isset($_SESSION['logged'])) {
  header("Location: ../../login.php");
  exit();
} else {
  require_once '../../database/database.php';
  $headline = $_POST['headline'];
  $content = $_POST['content'];
  $author = $_POST['author'];

  $que = $db->prepare('INSERT INTO wpisy(name, content, author) values (:headline, :content, :author);');
  $que->bindValue(':headline', $headline, PDO::PARAM_STR);
  $que->bindValue(':content', $content, PDO::PARAM_STR);
  $que->bindValue(':author', $author, PDO::PARAM_STR);
  $que->execute();

  if($que) {
    $_SESSION['added'] = "<span style='color: darkgreen; font-size: 20px;'>Dodano wpis</span>";
    header("Location: ../add.php");
    exit();
  } else {
    $_SESSION['add-error'] = "<span style='color: red; font-size: 20px;'>Nie udało się dodać wpisu</span>";
    header("Location: ../add.php");
  }
}
