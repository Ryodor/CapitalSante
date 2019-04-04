<?php
// index.php for api in /var/www/html/api/add_drug
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Thu Apr 20 10:20:21 2017 REUTER Faustine
// Last update Thu Apr 20 15:28:00 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("INSERT INTO Drug(id_user, id_doctor, name, quantity, comment) VALUES (:id, :id_doctor, :name, :quantity, :comment);");
$row->bindParam(':name', $_GET['name'], PDO::PARAM_STR);
$row->bindParam(':comment', $_GET['comment'], PDO::PARAM_STR);
$row->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
$row->bindParam(':id_doctor', $_GET['id_doctor'], PDO::PARAM_STR);
$row->bindParam(':quantity', $_GET['quantity'], PDO::PARAM_STR);
$row->execute();
$row->closeCursor();
$result['error'] = "succes";

echo json_encode($result);