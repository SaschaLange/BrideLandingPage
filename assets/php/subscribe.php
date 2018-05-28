<?php 

$host = 'vweb04.nitrado.net';
$user = 'ni1699530_1sql1';
$pass = '1b611a34';
$database = 'ni1699530_1sql1';

$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_EMULATE_PREPARES => false,
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);

$sql = "INSERT INTO mailAdressen (email) VALUES (:email)";

$statement = $pdo->prepare($sql);
$statement->bindValue(':email', $_POST['email']);

$statement->execute();

header("localhost:8080/index.php");

?>