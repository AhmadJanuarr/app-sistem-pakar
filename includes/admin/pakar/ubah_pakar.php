<div class="kanan">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Pasien</h1>
        </div>
        <div class="row">
            <form action="function.php?act=ubahPakar&id_user=<?= $user['id_user']; ?>" id="ubah" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Pakar</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                    <label for=" email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                    <label for=" alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                    <label for=" tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        value="<?= $user['tgl_lahir']; ?>">
                </div>
                <input type=" submit" name="ubah_btn" id="ubah" class="btn btn-primary" value="Ubah">
            </form>
        </div>
    </div>
</div>