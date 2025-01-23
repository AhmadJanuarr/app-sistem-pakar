<div class="kanan">
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row ml-4">
            <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 70vh;">
                <div class="card w-50">
                    <div class="card-header bg-primary text-white">
                        <h1 class="h3 mb-0">Form Tambah Gejala</h1>
                    </div>
                    <div class="card-body">
                        <form action="function.php?act=tambahGejala" id="tambah" method="POST">
                            <div class="form-group">
                                <label for="namaGejala">Gejala</label>
                                <input type="text" class="form-control" id="namaGejala" name="namaGejala"
                                    placeholder="Masukkan gejala">
                            </div>
                            <div class="form-group">
                                <label for="id_penyakit">Nama Penyakit</label>
                                <select name="id_penyakit" id="id_penyakit" class="form-control">
                                    <option value="">Pilih Penyakit dari Gejala</option>
                                    <?php while ($penyakit = mysqli_fetch_assoc($queryPenyakit)) { ?>
                                        <option value="<?= $penyakit["id_penyakit"]; ?>"><?= $penyakit["penyakit"]; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <input type="submit" name="tambah_btn" id="tambah" class="btn btn-primary btn-block"
                                value="Tambah">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>