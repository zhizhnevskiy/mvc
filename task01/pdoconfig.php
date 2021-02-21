<?php
$servername = "127.0.0.1";
$database = "company_employees";
$username = "root";
$password = "";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];