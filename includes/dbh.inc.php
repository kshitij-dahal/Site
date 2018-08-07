<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "practice";

try
{
$pdo = new PDO('mysql:host=localhost;dbname=practice', 'ijdbuser',
 '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $pdo->exec('SET NAMES "utf8"');
}
catch(PDOException $e)
{
	echo $e;
}
?>