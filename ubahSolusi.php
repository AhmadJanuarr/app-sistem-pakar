<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "function.php";
$id_solusi = $_GET["id_solusi"];
$queryPenyakit = mysqli_query($koneksi, "SELECT * FROM penyakit");
$query = mysqli_query($koneksi, "SELECT solusi.*, penyakit.*, solusi.deskripsi FROM solusi INNER JOIN penyakit ON solusi.id_penyakit = penyakit.id_penyakit WHERE id_solusi = '$id_solusi'");
$data = mysqli_fetch_assoc($query);
include "includes/header.php";
include "includes/sidebar.php";
include "includes/admin/solusi/ubah_solusi.php";
include "includes/footer.php";
