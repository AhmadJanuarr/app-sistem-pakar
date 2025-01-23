<div class="kanan">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Pasien
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pasien['jml_pasien']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Penyakit
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= $penyakit['jml_penyakit']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Gejala
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $gejala['jml_gejala']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Solusi
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $solusi['jml_solusi']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data -->
            <div class="card shadow  ml-3 mb-12">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pakar</h6>
                </div>
                <div class="card-body">
                    <form method="post" encytpe="multipart/form-data">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <?php if ($_SESSION['role'] == 0) {
                                        echo '<th>Aksi</th>';
                                    } ?>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Tgl Lahir</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data = mysqli_fetch_assoc($queryPasien)) { ?>
                                <tr>
                                    <td>
                                        <a class="badge badge-pill badge-primary"
                                            href="ubahPakar.php?id_user=<?php echo $data["id_user"]; ?>">edit</a> |
                                        <a href="function.php?act=hapusPakar&id_user=<?= $data["id_user"]; ?>"
                                            onclick="return confirm('Yakin ingin menghapus data?');"
                                            class="badge badge-pill badge-danger">hapus</a>
                                    </td>
                                    <td><?= $data['nama']; ?></td>
                                    <td><?= $data['email']; ?></td>
                                    <td><?= $data['alamat']; ?></td>
                                    <td><?= $data['tgl_lahir']; ?></td>
                                    <td><?= $data['nama']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <?php if ($_SESSION['role'] == 0) {
                                echo '<a href="register_pakar.php" class="btn btn-primary my-2 px-2">Tambah Data Pakar</a>';
                            } ?>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>