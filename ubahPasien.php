<?php
include "function.php";
$id_user = $_GET["id_user"];
$queryUser = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
$user = mysqli_fetch_assoc($queryUser);
include "includes/header.php";
include "includes/sidebar.php";
include "includes/admin/user/ubah_user.php";
include "includes/footer.php";
