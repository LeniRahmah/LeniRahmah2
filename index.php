<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.html");
}

include "koneksi.php";

$query = "SELECT m .*, p.nama namaProdi FROM mahasiswa m JOIN prodi p ON m.id = p.id;";
$data = ambildata($query);

include "template/header.php";
include "template/sidebar.php";
?>
<br>
<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Data Mahasiswa</h3>
                        <div class="card-tools">
                            <a href="tambahmahasiswa.php" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Telp</th>
                                    <th>Email</th>
                                    <th>Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i = 1;
                                foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $d["nim"] ?></td>
                                        <td><?php echo $d["nama"] ?></td>
                                        <td><?php echo $d["telp"] ?></td>
                                        <td><?php echo $d["email"] ?></td>
                                        <td><?php echo $d["namaProdi"] ?></td>
                                        <td><a class="btn btn-danger" href="deletemahasiswa.php?nim=<?= $d['nim']; ?>"
                                                onclick="return confirm('Yakin ingin hapus?')">Delete</a>
                                            <a class="btn btn-warning" href="editmahasiswa.php?nim=<?= $d['nim']; ?>">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>
        </br>

        <?php
        include "template/footer.php";
        ?>