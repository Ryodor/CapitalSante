<?php
// index.php for api in /var/www/html/api/subscribe
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Fri Apr 14 20:06:33 2017 REUTER Faustine
// Last update Mon Apr 17 10:04:06 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("SELECT * FROM Users WHERE mail = :mail");
$row->bindParam(':mail', $_GET["mail"], PDO::PARAM_STR);
$row->execute();
$tab_infos = $row->fetch();
$row->closeCursor();
if ($tab_infos == NULL)
  {
    $row = $pdo->prepare("INSERT INTO Users(mail, password, name, surname, sexe) VALUES (:mail, :password, :name, :surname, :sexe);");
    $row->bindParam(':mail', $_GET['mail'], PDO::PARAM_STR);
    $row->bindParam(':password', $_GET['pwd'], PDO::PARAM_STR);
    $row->bindParam(':name', $_GET['name'], PDO::PARAM_STR);
    $row->bindParam(':surname', $_GET['surname'], PDO::PARAM_STR);
    $row->bindParam(':sexe', $_GET['sexe'], PDO::PARAM_STR);
    $row->execute();
    $row->closeCursor();
    $result['error'] = 0;
  }
else
  $result['error'] = 1;

echo json_encode($result);