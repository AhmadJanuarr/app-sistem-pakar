<?php
include 'function.php';
include "includes/public/header.php";
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-xl">
            <a class="navbar-brand" href="#">
                <h3>AyamSehat.</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item align-self-center active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item align-self-center active">
                        <a class="nav-link" href="#alur">Alur Diagnosa <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item ">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary btn-login" data-toggle="modal"
                            data-target="#exampleModal">Log In</button>
                        </button>

                        <!-- Login -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form id="login-form" action="function.php?act=login" method="POST">
                                            <div class="form-group">
                                                <div id="result"></div>
                                                <label for="nama" class="col-form-label">Username :</label>
                                                <input type="text" class="form-control" id="nama" name="nama" rows="3"
                                                    placeholder="Username">
                                                <label for="pass" class="col-form-label">Password :</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" rows="3" placeholder="Password">
                                            </div>
                                            <div class="form-row">
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="login_btn" id="login" class="btn btn-primary"
                                                    value="Log in">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="btn px-4 btn-primary ml-2 btn-register" href="register.php" role="button">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="heroBWA bg-light">
        <div class="container-xl">
            <div class="row position-relative">
                <div class="col align-self-center">
                    <h1 class="mb-4 heading">Sistem Pakar </h1>
                    <h6 class="font-weight-normal">Diagnosa dan Identifikasi Penyakit Ayam Menggunakan Metode Forward
                        Chaining</h6>
                    </p>
                    <a class="btn btn-primary" href="register.php" role="button">Diagnosa Sekarang</a>
                </div>
                <div class="col d-none d-sm-block z-10">
                    <img width="500" src="gambar/pict1.png" alt="hero" />
                </div>
            </div>
        </div>
    </section>

    <section id="alur" class="py-5 ">
        <!--Content2-->
        <div class="container-xl">
            <h1 style=" text-align: center;" class="font-weight-normal sub-heading ">Cari Tahu Penyakit Ayam dan Cara
                mengatasinya</h1>
            <p class="pb-5 text-center font-weight-light">Ikuti pentujuk dibawah ini, agar anda tidak kesulitan di
                diagnosa penyakit ayam</p>
            <p></p>
            <div class="card-deck text-center ">
                <div class="card border">
                    <img src="gambar/item1.png" class="card-img-top  mx-auto mt-5" style="width: 300px; height:250px">
                    <div class="card-body pt-5">
                        <h5 class="card-title ">Isi biodata</h5>
                        <p class="card-text font-weight-light ">Silakan buka tautan Diagnosa dan lengkapi dengan
                            informasi biodata anda..</p>
                    </div>
                </div>
                <div class="card border">
                    <img src="gambar/item2.png" class="card-img-top mx-auto mt-5" style="width: 300px; height:250px">
                    <div class="card-body pt-5">
                        <h5 class="card-title">Pilih Gejala Penyakit</h5>
                        <p class="card-text font-weight-light">Dalam tahap ini pengguna akan diberikan beberapa
                            pertanyaan terkait dengan gejala yang dialami.</p>
                    </div>
                </div>
                <div class="card border">
                    <img src="gambar/item3.png" class="card-img-top mx-auto mt-5" style="width: 300px; height:250px">
                    <div class="card-body pt-5">
                        <h5 class="card-title ">Hasil Penyakit Dan Solusi</h5>
                        <p class="card-text font-weight-light">Hasil dari penyakit dari ayam akan muncul dan memberikan
                            solusi terbaik..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-30 mb-5 container-xl">
        <div class="row margin-top mb-5">
            <div class="col d-flex justify-content-center flex-column text-center mb-5 margin-top">
                <h1 class="font-weight-normal sub-heading ">Cara kerja metode Foward Chaining</h1>
                <p class="font-weight-light">Forward Chaining adalah teknik inferensi dalam sistem pakar yang berproses
                    dari fakta awal menuju kesimpulan melalui serangkaian aturan yang cocok.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-5">
                <img src="gambar/image2.png" style="width: 400px; height:400px">
            </div>
            <div class="col-7 d-flex justify-content-center flex-column">
                <h2 class="mt-4 ">Metode Foward Chaining pada Sistem Pakar Diagnosa Penyakit Ayam</h2>
                <p class="font-weight-light">Proses ini melibatkan pengumpulan fakta, penerapan aturan, penambahan
                    informasi baru, iterasi dengan informasi tersebut, dan berlanjut hingga mencapai kesimpulan.</p>
            </div>
        </div>
    </section>
    <section section class="margin-top container-xl">
        <div class="row margin-top d-flex flex-column">
            <div class="col margin-top d-flex justify-content-center flex-column text-center">
                <h1 class="font-weight-normal sub-heading ">Memulai Jawaban Pertanyaan Penting </h1>
                <p class="font-weight-light">Proses menjawab pertanyaan kunci melibatkan pengumpulan fakta, penerapan
                    aturan, penambahan informasi, iterasi, dan berlanjut hingga kesimpulan untuk respons yang mendalam
                    dan komprehensif.</p>
            </div>



            <div class="col margin-top">
                <div class="accordion mb-5" id="accordionExample">
                    <div class="card mb-3">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn font-weight-bold btn-block text-left" type="button"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Apa itu Metode Forward Chaining?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Metode Forward Chaining adalah teknik inferensi yang digunakan dalam sistem pakar,
                                dimana proses penalaran dimulai dari informasi yang diketahui menuju kesimpulan yang
                                dicari.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn font-weight-bold btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Bagaimana Metode Forward Chaining bekerja dalam Sistem Pakar Diagnosa Penyakit Ayam?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Dalam sistem pakar ini, metode Forward Chaining memulai dengan gejala-gejala yang
                                diamati pada ayam, kemudian menerapkan aturan-aturan yang telah ditetapkan untuk
                                mencapai diagnosa penyakit.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn font-weight-bold btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Mengapa Metode Forward Chaining dipilih untuk Sistem Pakar Diagnosa Penyakit Ayam?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Metode ini dipilih karena kemampuannya untuk menangani situasi dimana informasi awal
                                yang tersedia adalah gejala-gejala yang mudah diamati, dan proses inferensi dapat
                                dilakukan secara sistematis hingga mencapai diagnosa yang tepat.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn font-weight-bold btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Apa keuntungan menggunakan Metode Forward Chaining?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Keuntungan utama adalah efisiensi dalam mencapai kesimpulan tanpa perlu mengevaluasi
                                semua aturan yang ada, hanya aturan yang relevan dengan informasi yang tersedia.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn font-weight-bold btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Apa tantangan yang dihadapi saat menerapkan Metode Forward Chaining? </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Tantangan utama adalah memastikan bahwa basis pengetahuan dan aturan yang digunakan
                                lengkap dan akurat, sehingga dapat menghasilkan diagnosa yang tepat. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="margin-top mb-5">
        <div class="pt-10 pb-10">
            <div class="container-xl mx-auto d-flex flex-wrap justify-content-center">
                <a href="" class="ml-4 md:ml-8">
                    <img src="icon/facebook.svg" alt="Picture" width="40">
                </a>
                <a href="#" class="ml-4 md:ml-8">
                    <img src="icon/twitter.svg" alt="Picture" width="40">
                </a>
                <a href="#" class="ml-4 md:ml-8">
                    <img src="icon/instagram.svg" alt="Picture" width="40">
                </a>
                <a href="#" class="ml-4 md:ml-8">
                    <img src="icon/linkedin.svg" alt="Picture" width="40">
                </a>
                <a href="#" class="ml-4 md:ml-8">
                    <img src="icon/github.svg" alt="Picture" width="40">
                </a>
            </div>
        </div>
    </section>
    <footer class="footer bg-light py-3 mt-10">
        <div class=" container-xl">
            <div class="row">
                <!-- Footer Column 1 -->
                <div class="col-md-4 mb-3">
                    <h5>Tentang </h5>
                    <p>Sistem pakar diagnosa penyakit ayam membantu peternak dan dokter hewan mengidentifikasi penyakit,
                        mengambil keputusan perawatan, dan memberikan rekomendasi kesehatan ayam di pertanian ayam.</p>
                </div>
                <!-- Footer Column 2 -->
                <div class="col-md-4 mb-3">
                    <h5>Link </h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Kunjungi halaman diagnosa</a></li>
                        <li><a href="#">Login Admin</a></li>
                    </ul>
                </div>
                <!-- Footer Column 3 -->
                <div class="col-md-4 mb-3">
                    <h5>Kontak</h5>
                    <p>Alamat: Bandar Lampung, Kedaton , Lampung</p>
                    <p>Email: ahmadjanuaramri2015@gmail.com</p>
                    <p>Telepon: 089630507889</p>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="text-center mt-4">
                <p class="mb-0">© 2023 Hak Cipta Dilindungi. Dibuat oleh Ahmad Januar Amri.</p>
            </div>
        </div>
    </footer>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>