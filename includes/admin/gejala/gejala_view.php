<div class="kanan">
    <div class="container-fluid">
        <!-- Page Heading -->
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
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Users
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

            <!-- DataTales Example -->
            <div class="card shadow mb-12 w-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Gejala</h6>
                </div>
                <div class="card-body">
                    <form method="post" encytpe="multipart/form-data">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center col-1">Id Gejala</th>
                                    <th>Nama Gejala</th>
                                    <th class="text-center col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data = mysqli_fetch_assoc($queryGejala)) { ?>
                                <tr>
                                    <td class="text-center"><?= $data['id_gejala']; ?></td>
                                    <td><?= $data['gejala']; ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-primary p-1"
                                            href="ubahGejala.php?id_gejala=<?php echo $data["id_gejala"]; ?>">edit</a>
                                        <a href="function.php?act=hapusGejala&id_gejala=<?= $data['id_gejala']; ?>"
                                            onclick="return confirm('Yakin ingin menghapus data?');"
                                            class="btn btn-danger p-1">hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <a href="tambahGejala.php" class="btn btn-primary my-2 px-2">Tambah Data Gejala</a>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>