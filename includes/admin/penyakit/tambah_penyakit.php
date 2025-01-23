<div class="kanan">
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 70vh;">
        <div class="card w-50">
            <div class="card-header bg-primary text-white">
                <h1 class="h3 mb-0">Form Tambah Penyakit</h1>
            </div>
            <div class="card-body">
                <form action="function.php?act=tambahPenyakit" id="tambah" method="POST">
                    <div class="form-group">
                        <label for="namaPenyakit">Penyakit</label>
                        <input type="text" class="form-control" id="namaPenyakit" name="namaPenyakit"
                            placeholder="Masukkan penyakit">
                    </div>
                    <!-- Other form fields here -->
                    <input type="submit" name="tambah_btn" id="tambah" class="btn btn-primary btn-block"
                        value="Tambah" />
                </form>
            </div>
        </div>
    </div>
</div>