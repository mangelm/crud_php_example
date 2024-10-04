<?php
include 'config_libros.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM libros WHERE id = ?");
$stmt->execute([$id]);

header('Location: libros.php');
exit;
