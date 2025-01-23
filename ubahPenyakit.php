<?php

include "function.php";
$id_penyakit = $_GET["id_penyakit"];
$queryPenyakit = mysqli_query($koneksi, "SELECT * FROM penyakit WHERE id_penyakit = '$id_penyakit'");
$penyakit = mysqli_fetch_assoc($queryPenyakit);
include "includes/header.php";
include "includes/sidebar.php";
include "includes/admin/penyakit/ubah_penyakit.php";
include "includes/footer.php";
