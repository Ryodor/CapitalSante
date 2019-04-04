<?php
// index.php for api in /var/www/html/api/connect
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Fri Apr 14 12:21:45 2017 REUTER Faustine
// Last update Mon Apr 17 10:33:21 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("SELECT * FROM Users WHERE mail = :mail");
$row->bindParam(':mail', $_GET["mail"], PDO::PARAM_STR);
$row->execute();
$tab_infos = $row->fetch();
$row->closeCursor();

if (($_GET["pwd"] == $tab_infos["password"]) && $_GET != NULL && $tab_infos != NULL)
  {
    $result['user_exist'] = true;
    $result['user_infos'] = $tab_infos;
  }
else
  $result['user_exist'] = false;

echo json_encode($result);
