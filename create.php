<?php
$conn = new 
PDO("sqlite:database.sqlite);

$deskripsi = 'Tidur Siang';
$waktu = 90;
$sql = 'INSERT INTO 000-tugas(deskripsi,waktu) VALUES(:deskripsi, :waktu)';

$statement = $conn->prepare($sql);

$statement->execute([
':deskripsi' => $deskripsi,
':waktu' => $waktu
]);

$tugas_id = $conn->lastInsertId();

header("Location: create.php");
exit;
?>
