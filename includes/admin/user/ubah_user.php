<div class="kanan">
    <div class="container-fluid d-flex align-items-center justify-content-center " style="height: 70vh;">
        <div class="card w-50">
            <div class="card-header bg-primary text-white">
                <h1 class="h3 mb-0">Ubah Data Pasien</h1>
            </div>
            <div class="card-body">
                <form action="function.php?act=ubahPasien&id_user=<?= $user['id_user']; ?>" id="ubah" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                        <label for=" email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                        <label for=" alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="<?= $user['alamat']; ?>">
                        <label for=" tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                            value="<?= $user['tgl_lahir']; ?>">
                    </div>
                    <input type=" submit" name="ubah_btn" id="ubah" class="btn btn-primary btn-block" value="Ubah">
                </form>
            </div>
        </div>
    </div>
</div>