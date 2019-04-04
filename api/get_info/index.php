<?php
// index.php for api in /var/www/html/api/get_info
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Thu Apr 20 09:48:30 2017 REUTER Faustine
// Last update Thu Apr 20 09:50:05 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("SELECT * FROM Users WHERE id = :id");
$row->bindParam(':id', $_GET["id"], PDO::PARAM_STR);
$row->execute();
$tab_infos = $row->fetch();
$row->closeCursor();

$result['user_infos'] = $tab_infos;

echo json_encode($result);
