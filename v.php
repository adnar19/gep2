<?php

if (!isset($_COOKIE['utilisateur'])) {
  include 'connexion.php';
  die();
}
$utilisateur = $_COOKIE['utilisateur'];


$dbname =   __DIR__ . '/data/users.sqlite';
$file_db = new PDO('sqlite:'.$dbname);
$file_db->exec("pragma synchronous = off;");

$conecte = false;
$result_one = $file_db->query("SELECT * FROM utilisateur");
foreach($result_one as $row) {
if ( md5($row['nom'].$row['pwd'])  == $utilisateur) $conecte = true;
}


if (!$conecte) {
   // print $utilisateur;
 include 'connexion.php';
 die();
}






 ?>
