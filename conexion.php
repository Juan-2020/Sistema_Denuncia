<?php
 
$conection= new mysqli("localhost", "root", "", "proyecto");
if ($conection->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>