<?php
include "function.php";
$id_gejala = $_GET["id_gejala"];
$queryPenyakit = mysqli_query($koneksi, "SELECT * FROM penyakit");
$query = mysqli_query($koneksi, "SELECT * FROM relasi INNER JOIN penyakit ON relasi.id_penyakit = penyakit.id_penyakit INNER JOIN gejala ON relasi.id_gejala = gejala.id_gejala WHERE relasi.id_gejala = '$id_gejala'");
$data = mysqli_fetch_assoc($query);
include "includes/admin/header.php";
include "includes/admin/sidebar.php";
include "includes/admin/gejala/ubah_gejala.php";
include "includes/admin/footer.php";
