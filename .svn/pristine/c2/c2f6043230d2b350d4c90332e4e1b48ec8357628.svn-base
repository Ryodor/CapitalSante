<?php
// index.php for api in /var/www/html/api/add_doctor
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Mon Apr 17 15:39:23 2017 REUTER Faustine
// Last update Thu Apr 20 11:00:32 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("INSERT INTO Doctor(name, surname, home_phone, cell_phone, address, type) VALUES (:name, :surname, :hphone, :cphone, :address, :type);");
$row->bindParam(':name', $_GET['name'], PDO::PARAM_STR);
$row->bindParam(':surname', $_GET['surname'], PDO::PARAM_STR);
$row->bindParam(':hphone', $_GET['hphone'], PDO::PARAM_STR);
$row->bindParam(':cphone', $_GET['cphone'], PDO::PARAM_STR);
$row->bindParam(':address', $_GET['address'], PDO::PARAM_STR);
$row->bindParam(':type', $_GET['type'], PDO::PARAM_STR);
$row->execute();
$row->closeCursor();


$row = $pdo->prepare("SELECT id FROM Doctor WHERE name = :name AND surname= :surname AND home_phone = :hphone AND cell_phone = :cphone AND address = :address AND type = :type");
$row->bindParam(':name', $_GET['name'], PDO::PARAM_STR);
$row->bindParam(':surname', $_GET['surname'], PDO::PARAM_STR);
$row->bindParam(':hphone', $_GET['hphone'], PDO::PARAM_STR);
$row->bindParam(':cphone', $_GET['cphone'], PDO::PARAM_STR);
$row->bindParam(':address', $_GET['address'], PDO::PARAM_STR);
$row->bindParam(':type', $_GET['type'], PDO::PARAM_STR);
$row->execute();
$tab_infos = $row->fetch();
$row->closeCursor();


$row = $pdo->prepare("INSERT INTO Link_user_doctor(id_user, id_doctor) VALUES (:id_user, :id_doctor);");
$row->bindParam(':id_user', $_GET['id'], PDO::PARAM_STR);
$row->bindParam(':id_doctor', $tab_infos['id'], PDO::PARAM_STR);
$row->execute();
$row->closeCursor();


$result['error'] = "succes";

echo json_encode($result);
