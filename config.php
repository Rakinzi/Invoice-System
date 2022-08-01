<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Invoices";

session_start();

try{
  $conn = new mysqli($host, $user, $pass, $dbname);
}catch(Exception $e){
  $e->getMessage();
  $e->getFile();
  $e->getLine();
}
?>