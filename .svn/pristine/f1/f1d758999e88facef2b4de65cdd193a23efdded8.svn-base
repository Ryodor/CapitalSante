<?php
// index.php for api in /var/www/html/api/add_prescription
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Tue Apr 18 12:58:26 2017 REUTER Faustine
// Last update Thu Apr 20 14:01:44 2017 REUTER Faustine
//

include "../header.php";


$row = $pdo->prepare("INSERT INTO Prescriptions(name, comment, id_user, id_doctor, type, link, start_date, end_date) VALUES (:name, :comment, :id_user, :id_doctor, :type, :link, :sdate, :edate);");

$row->bindParam(':name', $_GET['name'], PDO::PARAM_STR);
$row->bindParam(':comment', $_GET['comment'], PDO::PARAM_STR);
$row->bindParam(':id_user', $_GET['id_user'], PDO::PARAM_STR);
$row->bindParam(':id_doctor', $_GET['id_doctor'], PDO::PARAM_STR);
$row->bindParam(':type', $_GET['type'], PDO::PARAM_STR);
$row->bindParam(':link', $_GET['link'], PDO::PARAM_STR);
$row->bindParam(':sdate', $_GET['start_date'], PDO::PARAM_STR);
$row->bindParam(':edate', $_GET['end_date'], PDO::PARAM_STR);

$row->execute();
$row->closeCursor();


$result['TEST'] =  $_GET['end_date'];
$result['error'] = "succes";

echo json_encode($result);