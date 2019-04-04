<?php
// index.php for api in /var/www/html/api/get_drug
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Thu Apr 20 09:06:30 2017 REUTER Faustine
// Last update Thu Apr 20 15:32:18 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("SELECT * FROM Drug WHERE id_user = :id");
$row->bindParam(':id', $_GET["id"], PDO::PARAM_STR);
$row->execute();
$tab_infos = $row->fetchAll();
$row->closeCursor();

$result['nb_drug'] =  count($tab_infos);

$i = 0;
while ( $i < count($tab_infos) )
  {
    $str = 'drugs' . $i;
    $result['drug'][$str]  = $tab_infos[$i];
    $i++;
  }

echo json_encode($result);
