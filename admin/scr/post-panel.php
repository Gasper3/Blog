<?php
//edit panel for article
  require_once '../database/database.php';
  $headline = $_POST['list'];
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
