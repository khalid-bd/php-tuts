<?php

require_once 'parameters.php';

try {
  $db = new PDO("mysql:host=$dbHost;dbname=$dbName", "$dbUser", "$dbPass");
  // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
  echo 'Impossible de se connecter à la bd.<br />';
}

$sthandler = $db->exec("SELECT * FROM users WHERE id = 1");
// $sthandler->execute();

var_dump($sthandler);die();