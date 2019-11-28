<?php
require_once '../database/database.php';
$que = $db->query('SELECT name from wpisy;');
$headlines = $que->fetchAll();
echo "<select name='list' class='list'>";
foreach($headlines as $head) {
  echo "<option value='".$head['name']."'>".$head['name']."</option>";
}
echo "</select>";
echo "<p><input type='submit' value='Usuń' name='buton'></p>";
