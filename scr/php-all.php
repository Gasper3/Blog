<?php
// show all articles
  require_once 'database/database.php';
  $que = $db->query('SELECT name, content, author from wpisy;');
  $posts = $que->fetchAll();

  foreach($posts as $post) {
    echo "<h2>{$post['name']}</h2>";
    echo "<p>{$post['content']}</p>";
    echo "<p class='autor'>Autorem wpisu jest: {$post['author']}</p>";
  }
