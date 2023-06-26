<?php
require_once('../../class/Database.php');
require_once('../../class/Form.php');

$database = new Database();
$id = $_GET['id'];
$database->delete("data_mahasiswa", "id=" . $id);
header('location: ../../home');
?>
