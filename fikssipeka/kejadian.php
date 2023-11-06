<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sipeka | Kejadian</title>
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


    <!-- Navbar Start -->
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
                    <a href="sejarah.php" class="nav-item nav-link">sejarah</a>
                    <a href="kejadian.php" class="nav-item nav-link active">kejadian</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SOP</a>
                        <div class="dropdown-menu m-0">
                            <a href="sop.php" class="dropdown-item">SOP Ketika banjir</a>
                            <a href="#" class="dropdown-item">SOP Sensor</a>
                        </div>
                    </div>
                    
                    <a href="kontak.php" class="nav-item nav-link">Contact</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Sipeka</h1>
                    <a href="" class="h5 text-white">Mengingat</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Kejadian 2017</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


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

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Sipeka | </h5>
                        <h1 class="mb-0">Mengingat Kembali Kejadian 2017</h1>
                    </div>
                    <p class="mb-4">Bendungan Pice berada di bagian hulu Sungai Lenggang yang letaknya ada di Desa Cangguh dan lokasinya berdekatan dengan kantor PT Timah. Bendungan Pice menjadi salah satu peninggalan Belanda di Kota Gantong, Belitung Timur. Bendungan yang dibangun sejak tahun 1934 hingga 1936 ini pada awalnya berfungsi untuk mengatur rendah-tingginya permukaan air. Hal ini diperlukan untuk mempermudah sistem kerja kapal keruk melakukan eksplorasi di sekitar kawasan ini. Bendungan Pice berada di bagian hulu Sungai Lenggang yang letaknya ada di Desa Cangguh dan lokasinya berdekatan dengan kantor PT Timah di Kawasan Gantong, Belitung Timur. Bendungan ini memiliki panjang sekitar 50 meter dengan 16 pintu air yang setiap pintunya memiliki ukuran 2,5 meter. Bendungan ini juga memiliki jembatan yang bisa dilalui masyarakat menuju Desa Cangguh.

                        Sebagai salah satu bendungan bersejarah di Belitung, bendungan ini memiliki daya tarik bagi para wisatawan yang berkunjung ke daerah Belitung Timur. Aliran airnya yang deras setinggi sekitar 10 meter menjadi daya tarik tersendiri bagi para pengunjung yang datang ke bendungan ini. Suasana yang sejuk dengan pemandangan hijaunya bukit menjadikan bendungan yang bercat biru ini begitu nyaman saat dikunjungi. Pelestarian benda cagar budaya merupakan hal yang penting berdasarkan sifat-sifat yang dimiliki oleh benda cagar budaya dan sesuai dengan amanat dari Undang-Undang No. 5 Tahun 1992 yang menyebutkan bahwa benda cagar budaya merupakan kekayaan budaya bangsa yang penting artinya bagi pemahaman dan pengembangan sejarah, ilmu pengetahuan, dan kebudayaan, sehingga perlu dilindungi dan dilestarikan demi pemupukan kesadaran jati diri bangsa dan kepentingan nasional. Pice adalah salah satu bendungan yang menjadi objek wisata yang mengandung unsur sejarah. Pice saat ini harus dirawat secara optimal dengan melakukan system pemantuan. Berdasarkan catatan sejarah pernah terjadi banjir yang puncaknya Tanggal 17 Juli 2017 Hari Minggu sekitar Pukul 07.00 WIB. Air di Bendungan Pice, Gantung meluber ke rumah-rumah warga. Hingga pukul 11.00 WIB air menenggelamkan seluruh rumah di Gantung dan sebagian besar wilayah di empat kecamatan sekitarnya. Bahkan Jembatan Bom tenggelam dan gudang PT Timah di sebelahnya hanya menyisakan muncungan atap saja. Itu adalah banjir pertama terbesar dalam sejarah di Belitung Timur dan semoga jadi yang terakhir.</p>
                    
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Lihat artikel lainnya</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/banjir1.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    
 

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