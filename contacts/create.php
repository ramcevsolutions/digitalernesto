<?php
include "../db/connection.php";
$name_contact = $_POST["name_contact"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$sql = "INSERT INTO contacts(name_contact, phone, message) VALUES('$name_contact', '$phone', '$message')";
$result= pg_query($connection, $sql);
if($result){
    echo "Conexión exitosa";
}else{
    echo "No acachete";
}