
<?php
include "koneksi.php";

$query= "SELECT * from prodi";
$data= ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</thead>
<tbody>
    <h1>Data Prodi</h1>
    <br>
    <table border="1" cellspacing="0" cellspadding="5">
        <head>
            <th>No</th>
            <th>Nama</th>
            <th>Kaprodi</th>
            <th>Jurusan</th>
    </thead>
    <tbody>
    
    <?php
    $i =1;
    foreach ($data as $d) :?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $d["nama"]?></td>
            <td><?php echo $d["kaprodi"]?></td>
            <td><?php echo $d["jurusan"]?></td>  
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    
</body>
</htm>
    
