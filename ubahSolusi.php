<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include "function.php";
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 1) {
        header("location: test.php");
    }
} else {
    header("location:index.php");
}

$id_solusi = $_GET["id_solusi"];
$queryPenyakit = mysqli_query($koneksi, "SELECT * FROM penyakit");
$query = mysqli_query($koneksi, "SELECT solusi.*, penyakit.*, solusi.deskripsi FROM solusi INNER JOIN penyakit ON solusi.id_penyakit = penyakit.id_penyakit WHERE id_solusi = '$id_solusi'");

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="icon/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
</head>

<body>
    <div class="kiri">
        <section class="logo">
            <h3>AyamSehat.</h3>
        </section>
        <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Data User</h5>
        </div>
        <section class="isi">
            <a class="nav-link" href="indexAdmin.php">
                <span>Data Pasien</span></a>
        </section>
        <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Gejala & Penyakit</h5>
        </div>
        <section class="isi">
            <a class="nav-link" href="indexPenyakit.php">
                <span>Data Penyakit</span>
            </a>
        </section>
        <section class="isi">
            <a class="nav-link" href="indexGejala.php">
                <span>Data Gejala</span>
            </a>
        </section>
        <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Solusi</h5>
        </div>
        <section class="isi">
            <a class="nav-link" href="indexSolusi.php">
                <span>Data Solusi</span>
            </a>
        </section>
        <section class="isi">
            <a class="nav-link" href="logout.php">
                <span>Logout</span>
            </a>
        </section>
    </div>

    <div class="kanan">
        <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 70vh;">
            <div class="card w-50">
                <div class="card-header bg-primary text-white">
                    <h1 class="h3 mb-0">Form Ubah Solusi</h1>
                </div>
                <div class="card-body">
                    <form action="function.php?act=ubahSolusi&id_solusi=<?= $data['id_solusi']; ?>" id="ubah" method="POST">
                        <div class="form-group">
                            <label for="namaSolusi">Solusi</label>
                            <input type="text" class="form-control" id="namaSolusi" name="namaSolusi" value="<?= $data['solusi']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsiSolusi">Deskripsi Solusi</label>
                            <textarea class="form-control" id="deskripsiSolusi" name="deskripsiSolusi" rows="3"><?= $data['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="id_penyakit">Nama Penyakit</label>
                            <select name="id_penyakit" id="id_penyakit" class="form-control">
                                <option value="<?= $data['id_penyakit']; ?>"><?= $data['penyakit']; ?></option>
                                <?php while ($penyakit = mysqli_fetch_assoc($queryPenyakit)) { ?>
                                    <option value="<?= $penyakit["id_penyakit"]; ?>"><?= $penyakit["penyakit"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <input type="submit" name="ubah_btn" id="ubah" class="btn btn-primary btn-block" value="Ubah">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>