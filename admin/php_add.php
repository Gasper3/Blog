<?php
session_start();
if(!isset($_SESSION['logged'])) {
  header("Location: ../login.php");
  exit();
} else {
  require_once '../database/database.php';
  $headline = $_POST['headline'];
  $content = $_POST['content'];
  $author = $_POST['author'];

  $que = $db->prepare('INSERT INTO wpisy(name, content, author) values (:headline, :content, :author);');
  $que->bindValue(':headline', $headline, PDO::PARAM_STR);
  $que->bindValue(':content', $content, PDO::PARAM_STR);
  $que->bindValue(':author', $author, PDO::PARAM_STR);
  $que->execute();

  if($que) {
    $_SESSION['added'] = "Dodano wpis";
    header("Location: add.php");
    exit();
  } else {
    $_SESSION['add-error'] = "Nie udało się dodać wpisu";
    header("Location: add.php");
  }
}
