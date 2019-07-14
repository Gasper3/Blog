<?php
  require_once '../database/database.php';
  $que = $db->query('SELECT name, content, author from wpisy;');
  $posts = $que->fetchAll();

  foreach($posts as $post) {
    echo "<h2 class='headline'>{$post['name']}</h2>";
    echo "<span class='content'>{$post['content']}</span>";
    echo "<p class='autor'>Autorem wpisu jest: {$post['author']}</p>";
  }
