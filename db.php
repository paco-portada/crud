<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'admin',
  'malaga2324',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
