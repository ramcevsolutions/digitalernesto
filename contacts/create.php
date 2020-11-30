<?php
include "../db/connection.php";
$name_contact = $_POST["name_contact"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$sql = "INSERT INTO contacts(name_contact, phone, message) VALUES('$name_contact', '$phone', '$message')";
$result= pg_query($connection, $sql);
if($result){
    echo'<script type="text/javascript">
    alert("Datos enviados");
    window.location.href="https://ernestodigital.herokuapp.com/#contact";
    </script>';
}else{
    echo'<script type="text/javascript">
    alert("Los datos no se guardaron, intente nuevamente");
    window.location.href="https://ernestodigital.herokuapp.com/#contact";
    </script>';
}