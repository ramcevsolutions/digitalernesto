<?php
include "../db/connection.php";
$name_contact = $_POST["name"]; 
$sql = "INSERT INTO contacts(name_contact, phone, message) VALUES('Ramiro', $name_contact, 'Hola')";
$result= pg_query($connection, $sql);
if($result){
    echo "Conexión exitosa";
}else{
    echo "No acachete";
}