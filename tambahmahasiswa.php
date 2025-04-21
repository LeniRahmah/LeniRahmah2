<?php
include "koneksi.php";

$query= "SELECT * from prodi";
$data= ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambahaksimahasiswa.php" method="post">
    <table>
        <tr>
            <td>nim</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>tanggallahir</td>
            <td><input type="date" name="tanggallahir"></td>
        </tr>
        <tr>
            <td>telp</td>
            <td><input type="text" name="telp"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>prodi</td>
            <td><select name="id_prodi">
                <?php foreach ($data as $d) : ?>
                    <option value="<?php echo $d['id'] ?>"><?php echo $d['nama'] ?></option>
                <?php endforeach ?>
            </select>
            </td>
        </tr> 
    </table> 
    <a href="index.php">kembali</a>
    <button type="submit">simpan</button>

    </form>
</body>

</html>