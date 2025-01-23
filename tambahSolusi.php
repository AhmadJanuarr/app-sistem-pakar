<?php

include "function.php";
$queryPenyakit = mysqli_query($koneksi, "SELECT * FROM penyakit");
include "includes/admin/header.php";
include "includes/admin/sidebar.php";
include "includes/admin/solusi/tambah_solusi.php";
include "includes/admin/footer.php";
