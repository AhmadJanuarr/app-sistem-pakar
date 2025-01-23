<div class="kanan">
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 70vh;">
        <div class="card w-50">
            <div class="card-header bg-primary text-white">
                <h1 class="h3 mb-0">Ubah Data Penyakit</h1>
            </div>
            <div class="card-body">
                <form action="function.php?act=ubahPenyakit&id_penyakit=<?= $penyakit['id_penyakit']; ?>" id="ubah"
                    method="POST">
                    <div class="form-group">
                        <label for="namaPenyakit">Nama Penyakit</label>
                        <input type="text" class="form-control" id="namaPenyakit" name="namaPenyakit"
                            value="<?= $penyakit['penyakit']; ?>">
                    </div>
                    <input type="submit" name="ubah_btn" id="ubah" class="btn btn-primary btn-block" value="Ubah">
                </form>
            </div>
        </div>
    </div>
</div>