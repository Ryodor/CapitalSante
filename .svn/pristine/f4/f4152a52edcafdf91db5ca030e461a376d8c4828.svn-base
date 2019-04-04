<?php
// header.php for api in /var/www/html/api
// 
// Made by REUTER Faustine
// Login   <reuter_f@etna-alternance.net>
// 
// Started on  Fri Apr 14 12:55:19 2017 REUTER Faustine
// Last update Fri Apr 14 13:25:28 2017 REUTER Faustine
//

header('Content-Type: application.json');
try {
  $pdo = new PDO('mysql:host=localhost;dbname=ios_camp', "admin", "admin", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  $result['connect_db'] = true;
} catch ( Exception $e){
  $result['connect_db'] = false;
  }