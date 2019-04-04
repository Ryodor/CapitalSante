<?php
// index.php for api in /var/www/html/api/get_doctor
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Mon Apr 17 10:14:01 2017 REUTER Faustine
// Last update Mon Apr 17 14:23:11 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("SELECT * FROM Link_user_doctor WHERE id_user = :id");
$row->bindParam(':id', $_GET["id"], PDO::PARAM_STR);
$row->execute();
$tab_id = $row->fetchAll();
$row->closeCursor();

$i = 0;
$result['test'] = count($tab_id);
while (count($tab_id) > $i)
  {
    $row = $pdo->prepare("SELECT * FROM Doctor WHERE id = :id");
    $row->bindParam(':id', $tab_id[$i]["id_doctor"], PDO::PARAM_STR);
    $row->execute();
    $tab_infos = $row->fetch();
    $row->closeCursor();
    
    $key = "doctor" . $i;
    $result['doctors'][$key] = $tab_infos;
        
    $i++;
  }

if ($tab_infos = NULL)
  {
    $result['error'] = 1;
  }

echo json_encode($result);

