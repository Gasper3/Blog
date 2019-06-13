<?php
if(!isset($_SESSION['logged'])) {
  header("Location: ../login.php");
  exit();
} else {
  require_once '../database/database.php';
  $que = $db->query('SELECT name, content, author from wpisy;');
  $posts = $que->fetchAll();

  foreach ($posts as $post) {
    
  }
}
