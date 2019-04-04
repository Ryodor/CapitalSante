<?php
// index.php for api in /var/www/html/api
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Tue Apr 18 19:52:42 2017 REUTER Faustine
// Last update Thu Apr 20 09:58:38 2017 REUTER Faustine
//

include "../header.php";

$row = $pdo->prepare("SELECT * FROM Prescriptions WHERE id_user = :id");
$row->bindParam(':id', $_GET["id"], PDO::PARAM_STR);
$row->execute();
$tab_infos = $row->fetchAll();
$row->closeCursor();

$now = date('Y-m-d');
$now = explode("-", $now);
$now = $now[0].$now[1].$now[2];

$result['nb_prescription'] = count($tab_infos);

$i = 0;
  while ($i < count($tab_infos))
    {
      $sdate = $tab_infos[$i]['start_date'];
      $edate = $tab_infos[$i]['end_date'];
      $sdate = explode("-", $sdate);
      $edate = explode("-", $edate);
      $sdate = $sdate[0].$sdate[1].$sdate[2];
      $edate = $edate[0].$edate[1].$edate[2];

      $str = 'prescription' . $i;
      if ($now >= $sdate && $ow <= $edate )
	{
	  $result['current'][$str] = $tab_infos[$i];
	}
      $i++;
    }

  
echo json_encode($result);
