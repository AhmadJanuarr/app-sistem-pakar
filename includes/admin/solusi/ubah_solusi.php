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
                        <input type="text" class="form-control" id="namaSolusi" name="namaSolusi"
                            value="<?= $data['solusi']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsiSolusi">Deskripsi Solusi</label>
                        <textarea class="form-control" id="deskripsiSolusi" name="deskripsiSolusi"
                            rows="3"><?= $data['deskripsi']; ?></textarea>
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