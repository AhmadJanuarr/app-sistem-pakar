<?php
include 'function.php';
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 0) {
        header("location: indexAdmin.php");
    } else if ($_SESSION['role'] == 2) {
        header("location: indexPakar.php");
    }
}

if (!isset($_SESSION['persentase'])) {
    $_SESSION['persentase'] = [];
}


$gejala = mysqli_query($koneksi, "SELECT * FROM gejala");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="icon/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>AyamSehat!</title>
</head>

<body>
    <nav class="navbar py-2 navbar-expand-lg navbar-light">
        <div class="container">
            <h3>AyamSehat.</h3> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="btn px-4 btn-primary ml-2" href="logout.php" role="button">Log Out</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="test mt-5">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h2 class="mb-4">Pertanyaan : </h2>
                    <form action="" method="post" enctype="multipart/form-data" role="form">
                        <?php
                        $id_penyakit = 1;
                        // if(!isset($_SESSION['id_penyakit'])){
                        //     $_SESSION['id_penyakit'] = $id_penyakit;
                        // }else{
                        //     $id_penyakit = $_SESSION['id_penyakit'];
                        // }
                        $id = gejala($id_penyakit);
                        $id_gejala = intval($id);
                        if (!isset($_SESSION['id_gejala'])) {
                            $_SESSION['id_gejala'] = $id_gejala;
                        } else {
                            $id_gejala = $_SESSION['id_gejala'];
                        }
                        $data = mysqli_query($koneksi, "SELECT gejala FROM gejala WHERE id_gejala = '$id_gejala'");
                        // var_dump($data);
                        $row = mysqli_fetch_assoc($data);
                        ?>
                        <p class="mb-4">
                        <h6>Apakah ayam mengalami <?= $row['gejala']; ?> ?</h6>
                        </p>
                        <?php
                        echo '<input type="submit" class="btn btn-success  mr-2 px-4 py-2" name="ya" value="Ya">';
                        echo '<input type="submit" class="btn btn-danger px-3 py-2" name="tidak" value="Tidak">';
                        $persentase = $_SESSION['persentase'];
                        $temp = 0;
                        $_SESSION['id_gejala'] = $id_gejala;
                        $next_gejala = $_SESSION['id_gejala'];
                        // $next_penyakit = $_SESSION['id_penyakit'];
                        if (isset($_POST['ya'])) {
                            if (isset($id_gejala)) {
                                $temp = $id_gejala;
                                array_push($persentase, $temp);
                            }
                            $_SESSION['persentase'] = $persentase;
                            $next_gejala = $id_gejala + 1;
                            $_SESSION['id_gejala'] = $next_gejala;
                        } else if (isset($_POST['tidak'])) {
                            $next_gejala = $id_gejala + 1;
                            $_SESSION['id_gejala'] = $next_gejala;
                            // $next_penyakit = $id_penyakit += 1;
                            // $_SESSION['id_penyakit'] = $next_penyakit;
                        }
                        if ($_SESSION['id_gejala'] > 33) {

                            $avianEncephalomyelitis = array(1, 2, 3, 4);
                            $alvianInfluenza = array(5, 6, 7, 8, 9, 10, 11);
                            $cacarUnggas = array(4, 8, 12, 13, 14, 15);
                            $eggDropSyndrome = array(4, 8, 16, 17, 18, 19);
                            $inclusionBodyHepatitis = array(4, 9, 14, 20, 21);
                            $infectiousBronchitis = array(4, 5, 10, 16,);
                            $infectiousBursalDisease = array(8, 19, 20, 22);
                            $infectiousLaryngoTracheitis = array(5, 10, 14, 23);
                            $marekDisease = array(8, 19, 24, 25, 26, 27);
                            $newcastleDisease = array(4, 25, 28, 33);
                            $viralArthritis = array(13, 25, 30, 31, 32, 33);

                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $avianEncephalomyelitis)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $AvianEncephalomyelitis = $nilai / count($avianEncephalomyelitis);
                            $Avian = number_format($AvianEncephalomyelitis, 3);
                            $hasilAvianEncephalomyelitis = $Avian * 100;

                            $_SESSION['avianEncephalomyelitis'] = $hasilAvianEncephalomyelitis;


                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $alvianInfluenza)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $AlvianInfluenza = $nilai / count($alvianInfluenza);
                            $Alvian = number_format($AlvianInfluenza, 3);
                            $hasilAlvianInfluenza = $Alvian * 100;
                            $_SESSION['alvianInfluenza'] = $hasilAlvianInfluenza;


                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $cacarUnggas)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $CacarUnggas = $nilai / count($cacarUnggas);
                            $Cacar = number_format($CacarUnggas, 3);
                            $hasilCacarUnggas = $Cacar * 100;

                            $_SESSION['cacarUnggas'] = $hasilCacarUnggas;


                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $eggDropSyndrome)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $EggDropSyndrome = $nilai / count($eggDropSyndrome);
                            $Egg = number_format($EggDropSyndrome, 3);
                            $hasilEggDropSyndrome = $Egg * 100;

                            $_SESSION['eggDropSyndrome'] = $hasilEggDropSyndrome;


                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $inclusionBodyHepatitis)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $InclusionBodyHepatitis = $nilai / count($inclusionBodyHepatitis);
                            $Hepatitis = number_format($InclusionBodyHepatitis, 3);
                            $hasilInclusionBodyHepatitis = $Hepatitis * 100;
                            $_SESSION['inclusionBodyHepatitis'] = $hasilInclusionBodyHepatitis;

                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $infectiousBronchitis)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $InfectiousBronchitisl = $nilai / count($infectiousBronchitis);
                            $Infeksi = number_format($InfectiousBronchitis, 3);
                            $hasilInfectiousBronchitis = $Infeksi * 100;
                            $_SESSION['infectiousBronchitis'] = $hasilInfectiousBronchitis;

                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $infectiousBursalDisease)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $InfectiousBursalDisease = $nilai / count($infectiousBursalDisease);
                            $Diesease = number_format($InfectiousBursalDisease, 3);
                            $hasilInfectiousBursalDisease = $Diesease * 100;
                            $_SESSION['infectiousBursalDisease'] = $hasilInfectiousBursalDisease;

                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $infectiousLaryngoTracheitis)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $InfectiousLaryngoTracheitis = $nilai / count($infectiousLaryngoTracheitis);
                            $Tracheitis = number_format($InfectiousLaryngoTracheitis, 3);
                            $hasilInfectiousLaryngoTracheitis = $Tracheitis * 100;
                            $_SESSION['infectiousLaryngoTracheitis'] = $hasilInfectiousLaryngoTracheitis;

                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $marekDisease)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $MarekDisease = $nilai / count($marekDisease);
                            $Marek = number_format($MarekDisease, 3);
                            $hasilMarekDisease = $Marek * 100;
                            $_SESSION['marekDisease'] = $hasilMarekDisease;

                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $newcastleDisease)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $NewcastleDisease = $nilai / count($newcastleDisease);
                            $Newcastle = number_format($NewcastleDisease, 3);
                            $hasilNewcastleDisease = $Newcastle * 100;
                            $_SESSION['newcastleDisease'] = $hasilNewcastleDisease;

                            $nilai = 0;
                            foreach ($persentase as $value) {
                                if (in_array($value, $viralArthritis)) {
                                    $nilai += 1;
                                } else {
                                    $nilai += 0;
                                }
                            }
                            $ViralArthritis = $nilai / count($viralArthritis);
                            $Arthritis = number_format($ViralArthritis, 3);
                            $hasilViralArthritis = $Arthritis * 100;
                            $_SESSION['viralArthritis'] = $hasilViralArthritis;



                            header('Location:hasil.php');
                        }
                        ?>
                        <br>

                </div>
                </form>
                <div class="col d-none d-sm-block">
                    <img width="500" src="gambar/pict1.png" alt="hero" />
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>