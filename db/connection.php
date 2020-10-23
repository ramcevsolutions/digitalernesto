<?php
$hostname='localhost';
$database='ernesto';
$username='postgres';
$password='12345678';
$port = 5432;

$connectionString = "user=$username password=$password host=$hostname port=$port dbname=$database";
$connection = pg_connect($connectionString) or die ('No se pudo conectar al servidor');
?>