<?php

require_once 'parameters.php';

try {
  $db = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {
  echo 'Impossible de se connecter à la bd.<br />';
}

// $request->execute();
