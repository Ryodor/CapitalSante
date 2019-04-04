<?php
// index.php for api in /var/www/html/api/get_prescription
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Tue Apr 18 09:35:00 2017 REUTER Faustine
// Last update Thu Apr 20 12:58:36 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("SELECT * FROM Prescriptions WHERE id_user = :id");
$row->bindParam(':id', $_GET["id"], PDO::PARAM_STR);
$row->execute();
$tab_infos = $row->fetchAll();
$row->closeCursor();

$result['nb_prescription'] = count($tab_infos);

$i = 0;


while ( $i < count($tab_infos) )
  {
    $row = $pdo->prepare("SELECT * FROM Doctor WHERE id = :id");
    $row->bindParam(':id', $tab_infos[$i]['id_doctor'], PDO::PARAM_STR);
    $row->execute();
    $tab_doc = $row->fetch();
    $row->closeCursor();
    
    $str = 'prescription' . $i;
    $result['prescription'][$str]  = $tab_infos[$i];
    $result['prescription'][$str]['info_doctor'] = $tab_doc;
    $i++;
  }
echo json_encode($result);