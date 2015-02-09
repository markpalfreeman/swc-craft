<?php
$link = mysql_connect('craft.dev', 'homestead', 'secret');
if (!$link) {
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
