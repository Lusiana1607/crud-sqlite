<?php
$id = 1;
$sql = 'SELECT id, deskripsi, waktu FROM tugas WHERE id = :tugas_id';
$statement = $conn->prepare($sql);
$statement->bindParam(':tugas_id', $id, PDO::PARAM_INT);
$statement->execute();
$tugas = $statement->fetch(PDO::FETCH_ASSOC);
if ($tugas) {
 echo $tugas['id'] . '.' . $tugas['deskripsi'];
} else {
 echo "Tugas dengan id $id tidak ditemukan.";
}
