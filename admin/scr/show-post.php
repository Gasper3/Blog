<?php
require_once '../database/database.php';
$headline = $_POST['list'];
$que = $db->prepare('SELECT name, content, author from wpisy where name like :headline');
$que -> bindValue(':head', $headline, PDO::PARAM_STR);
$que -> execute();
$article = $que->fetch(PDO::FETCH_ASSOC);
echo '<h2>Nagłówek wpisu</h2>';
echo "<p>{$article['name']}</p>";
