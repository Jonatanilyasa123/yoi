<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sipeka.id | SOP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/sipekaaja.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <!-- <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small> -->
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><img src="img/sipekaaja.png" alt="" style="width: 10%;"></i>Sipeka.id</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="sejarah.php" class="nav-item nav-link">Sejarah</a>
                    <a href="kejadian.php" class="nav-item nav-link">Kejadian</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">SOP</a>
                        <div class="dropdown-menu m-0">
                            <a href="sop.php" class="dropdown-item active">SOP Banjir</a>
                            <a href="#" class="dropdown-item">SOP Alat</a>
                        </div>
                    </div>
                   
                    <a href="kontak.php" class="nav-item nav-link">Contact</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pice.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sistem Pemantauan Ketinggian Air</h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?> :WIB</h5>
                            
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Panduan Kesiapsiagaan Bencana Banjir bagi Masyarakat</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chart</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Gauge</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/pice6.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sistem Pemantauan Ketinggian Air</h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?> :WIB</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Panduan Kesiapsiagaan Bencana Banjir bagi Masyarakat</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chart</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Data Real Time</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Chart</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Data Realtime</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="bi bi-thermometer"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Suhu</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="bi bi-moisture"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Kelembaban</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="bi bi-door-open"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Status Pintu Bendungan</h5>
                            <h1 class="text-white mb-0">Sedang di Tutup</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="img/banjirnih.png" alt="">
                        <h1 class="mb-4">Panduan Kesiapsiagaan Bencana Banjir bagi Masyarakat</h1>
                        <h2 class="mb-4">A. Saat Tidak Terjadi Banjir Apa yang Harus Dilakukan?</h2>
                        <p>1. Mendokumentasikan dokumen & surat berharga dalam bentuk softcopy</p>
                        <p>2. Mengetahui kebutuhan khusus anggota keluarga </p>
                        <p>3. Berbagi peran dalam keluarga jika terjadi banjir dan memastikan seluruh anggota keluarga memahami cara mematikan listrik dan kompor</p>
                        <p>4. Mencatat nomor darurat & menginformasikan kepada seluruh anggota keluarga</p>
                        <p>5. Mengecek potensi listrik yang berbahaya jika terkena air banjir </p>
                        <p>6. Mengetahui jalur evakuasi dan lokasi pengungsian</p>
                        <p>7. Memahami peringatan dini banjir yang ada di wilayahnya</p>
                        <p>8. Merencanakan dengan keluarga tempat pertemuan apabila keluarga terpencar ketika terjadi banjir</p>
                        <p>9. Melakukan kerja bakti membersihkan lingkungan dengan rutin</p>
                        <p>10. Menyiapkan "TAS SIAGA BENCANA" (bila perlu) dengan isi:
                        </p>
<div class="harus">
                        <p clas="harus">a. Pakaian untuk 3 hari & perlengkapan ibadah </p>
                        <p clas="harus">b. Obat-obatan pribadi & perlengkapan P3K </p>
                        <p clas="harus">c. Dokumen dan surat berharga (dibungkus plastik)</p>
                        <p clas="harus">d. Sarung/ Selimut </p>
                        <p clas="harus">e. Foto Keluarga</p>
                        <p clas="harus">f. Air Mineral</p>
                        <p clas="harus">g. Powerbank & Baterai Cadangan </p>
                        <p clas="harus">h. Pluit </p>
                        <p clas="harus">i. Masker & Handsanitizer</p>
                        <p clas="harus">j. Senter</p>
                        <p clas="harus">k. Kantung plastik</p>
                        <p clas="harus">l. Uang Tunai</p>
                        <p clas="harus">m. Makanan ringan tahan lama</p>
                        </div>
<br>
                        <h2 class="mb-4">B. Yang Tidak Boleh Dilakukan</h2>
                        <p>1. Jangan membuang sampah, kantong plastik dan botol plastik ke dalam saluran air / got / sungai</p>
                        <p>2. Jangan menyimpan dokumen dan surat berharga di area yang rawan terkena air banjir</p>
                        <p>3. Jangan mengabaikan saluran air yang tersumbat </p>
                        <p>4. Jangan memasang stop kontak di area yang rawan banjir</p>
<br>
                        <img class="img-fluid w-100 rounded mb-5" src="img/map.png" alt="">
                        <h1 class="mb-4">Panduan Kesiapsiagaan Bencana Banjir bagi Masyarakat</h1>
                        <h2 class="mb-4">A. Jika Ada Potensi Banjir</h2>
                        <p>1. Perhatikan informasi peringatan dini (WA Group warga misalnya)</p>
                        <p>2. Amankan barang berharga ke tempat yang aman dan tinggi</p>
                        <p>3. Matikan jaringan listrik dan Persiapkan tas siaga bencana </p>
                        <p>4. kuti arahan petugas Kampung Siaga Bencana (KSB) Lenggang</p>
<br>
                        <h2 class="mb-4">B. Pada Saat Terjadi Banjir Apa yang Harus Dilakukan?</h2>
                        <p>1. Cari informasi dari sumber yang terpercaya</p>
                        <p>2. Waspada terhadap arus air, saluran air, kubangan, dan tempat-tempat lain yang tergenang air.</p>
                        <p>3. lokasi yang telah ditentukan melalui jalur evakuasi. Prioritaskan kelompok rentan (orang sakit, penyandang disabilitas, anak-anak, ibu hamil, dan lansia) </p>
                   <br>
                  
                        <h2 class="mb-4">C. Jika Berada di Lokasi Pengungsian Apa yang Harus Dilakukan</h2>
                       <p>1. Bersihkan area yang digunakan untuk tidur</p>
                       <p>2. Menjaga keamanan dan Ketertiban</p>
                       <h2 class="mb-4">D. Yang Tidak Boleh Dilakukan</h2>
                    <p>1. Jangan berjalan di arus air yang deras dan gunakan tongkat atau sejenisnya untuk mengecek tempat berpijak.</p>
                    <p>2.  Jangan mengemudikan mobil di dan ke arah wilayah banjir</p>
                    <h2 class="mb-4">E. Setelah Banjir</h2>
                    <p>1. Cari informasi kondisi saat ini dan tempat mendapatkan bantuan dari sumber terpercaya.</p>
                    <p>2. Kembali kerumah setelah keadaan aman</p>
                    <p>3. Gunakan alas kaki untuk menghindari terkena benda tajam seperti paku, dll </p>
                    <p>4. Bersihkan lumpur akibat banjir</p>
                    <p>5. Sterilisasi rumah sebelum ditempati kembali</p>
                    <p>6. Waspada dengan instalasi listrik </p>
                    <p>7. Waspada pada binatang berbisa dan berbahaya</p>
                    <p>8. Waspada pada area yang berpotensi longsor atau bangunan yang berpotensi ambruk</p>
                    <p>9. Segera ke fasilitas kesehatan jika membutuhkan pelayanan kesehatan</p>
                    <p>10. Perbaiki saluran pembuangan air limbah</p>
                    
                        </div>
</div>
</div>
</div>
</div>
</div>


                       
               

                    <!-- Blog Detail End -->

   

                       
               

                  
                   
    
                 
    
    
               


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><img src="img/kemendikbud.png" alt="" style="width: 50%;"><img src="img/kbkm.png" alt="" style="width: 50%;"></i></h1>
                        </a>
                        <p class="mt-3 mb-4">Ini adalah situs web resmi untuk informasi tentang Proyek KBKM Kemah Budaya 2023 di Desa Lenggang, Kelompok Bendungan Pice.</p>
                      
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Informasi</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0"> <a href="https://www.google.com/maps?q=k1spN9VbKmnyGn9u6" target="_blank"></a>Bendungan pice</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">teampillarpice@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <!-- <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p> -->
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Sipeka Team</h3>
                                <img src="img/sipekaaja.png" alt="" style="width: 50%;">
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Sistem Pemantauan Ketinggian Air</a>
                                
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">sipeka app ©</a>2023</p> 
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>