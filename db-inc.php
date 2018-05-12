<?php
$dbHost = 'sql110.epizy.com';
$dbUsername = 'epiz_21519528';
$dbPassword = 'eng1002712';
$dbName = 'epiz_21519528_aiblessed_todo';

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$con){
  die('Database not found'. mysqli_connect_error());
  return;
}
