<?php 
// Koneksi ke database (pastikan $conn sudah didefinisikan sebelumnya)
// include 'koneksi.php'; // jika diperlukan

$tugas = [
    'id' => 1,
    'deskripsi' => 'Hiking Gunung Batur',
    'waktu' => 50
];

$sql = 'UPDATE tugas SET deskripsi = :deskripsi, waktu = :waktu WHERE id = :id';

$statement = $conn->prepare($sql);
$statement->bindParam(':id', $tugas['id'], PDO::PARAM_INT);
$statement->bindParam(':deskripsi', $tugas['deskripsi']);
$statement->bindParam(':waktu', $tugas['waktu'], PDO::PARAM_INT);

if ($statement->execute()) {
    // lakukan redirect untuk menampilkan tugas yang baru saja diupdate
    header('Location: update.php');
    exit;
} else {
    echo "Gagal mengupdate data.";
}
