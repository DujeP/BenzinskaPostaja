<?php
$server = 'localhost';      // adresa MySQL servera
$username = 'root';         // predefinirano korisničko ime
$password = '';             // predefinirana lozinka je prazan niz
$database = 'bazabenzinska'; // ime baze podataka kreirane u phpMyAdmin
$db = @new MySQLi($server, $username, $password, $database);
// provjera povezivanja s MySQL poslužiteljem.
if ($db->connect_errno) {
    print 'Pogreška prilikom povezivanja: ' . $MySQLi->connect_error;
    exit();
}
?>