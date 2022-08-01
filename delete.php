<?php 
ini_set("display_errors","1") ;
error_reporting(E_ALL);
require 'config.php';

if(isset($_GET['id'])){
    $order_id = $_GET['id'];


    $sql = "DELETE FROM invoice_order WHERE order_id='$order_id'";

    $result = $conn->query($sql);

    if($result == true) {
        header('location: invoice_list');
    }
    else{
        echo "Error".$sql."<br>".$conn->error;
    }
}
?>