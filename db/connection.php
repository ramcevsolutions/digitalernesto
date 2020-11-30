<?php
$hostname='ec2-52-44-166-58.compute-1.amazonaws.com';
$database='dfe17j0ivg3000';
$username='ukjjeqopcegteb';
$password='c802defb081f32ac85c063c70683c7fdc809d31b0eea69b0def322a59df18963';
$port = 5432;

$connectionString = "user=$username password=$password host=$hostname port=$port dbname=$database";
$connection = pg_connect($connectionString) or die ('No se pudo conectar al servidor');
?>