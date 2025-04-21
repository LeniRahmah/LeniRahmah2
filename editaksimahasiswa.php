
<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggalLahir = $_POST["tanggallahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id = $_POST["id_prodi"];

$query = "UPDATE mahasiswa SET nama = '$nama', tanggallahir = '$tanggalLahir', telp = '$telp', 
email = '$email', id = '$id' WHERE nim = '$nim'";

mysqli_query($conn, $query);

header("location:index.php");

?>
