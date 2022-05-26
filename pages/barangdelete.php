<?php
include_once "../database/database.php";

$id = $_GET['barang'];
$deleteSQL = "DELETE FROM `barang` WHERE `barang`.`id_barang` = ?";
$database = new Database();
$connection = $database->getConnection();
$statement = $connection->prepare($deleteSQL);
$statement->bindParam(1, $id_barang);
$statement->execute();

header('Location: main.php?page=barang');

?>