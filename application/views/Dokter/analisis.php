<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>System Analysis Kesehatanku </title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url(); ?>assets/dokter/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dokter/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/home/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">SAKU.COM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#search">Search</a> 
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
					<li class="page-scroll">
                         <li class="dropdown">
                        <a href="#" data-toggle="collapse" data-target="#demo"> Sign Up <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Sebagai Pasien</a>
                            </li>
                            <li>
                                <a href="#">Sebagai Dokter</a>
                            </li>
                        </ul>
                    </li>

                        
                    <li class="page-scroll">
                        <a href="<?php echo base_url(); ?>Home/login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/home/img/dokter.png" alt="">
                    <div class="intro-text">
                        <span class="name">SYSTEM ANALYSIS KESEHATANKU</span>
                        <hr class="star-light">
                        <span class="skills">Kenali Penyakitmu lalu Obati</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="search">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Analisis Penyakit</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="panel-border" data-magellan-expedition="fixed">
<div id="search-form" class="panel">
<form id="form-search" action='/cat' method='get'>
<div class="row">
<div class="large-4 medium-4 small-12 columns bold">
<label>Apa yang anda rasakan
</label>
<span class="custom-dropdown">
<select class="my-select" name='specialist'>
<option value="all">Pilih gejala...</option>
<option value="acupuncturist">Akupunktur</option>
<option value="adult-allergy-and-immunology">Alergi dan Imunologi</option>
<option value="pediatric-allergy-and-immunology">Alergi dan Imunologi Anak</option>
<option value="general-pediatrician">Anak</option>
<option value="andrologist">Andrologi</option>
<option value="anaesthetist">Anestesi</option>
<option value="cardiovascular-anesthesia">Anestesi Kardiovaskuler </option>
<option value="intensive-care-anesthesia">Anestesi Perawatan Intensif</option>
<option value="pediatric-anesthesia">Anestesi anak</option>
<option value="obstetric-anesthesia">Anestesi obstetrik</option>
<option value="pediatric-surgeon">Bedah Anak</option>
<option value="cardiovascular-thoracic-surgeon">Bedah Jantung, Thorax &amp; Pembuluh Darah</option>
<option value="oral-surgeon">Bedah Mulut</option>
<option value="orthopaedic-traumatology-surgeon">Bedah Orthopaedi dan Traumatologi</option>
<option value="vascular-surgeon">Bedah Pembuluh Darah</option>
<option value="gastro-enterologic-surgeon">Bedah Perut</option>
<option value="plastic-surgeon">Bedah Plastik</option>
<option value="digestive-surgeon">Bedah Saluran Pencernaan</option>
<option value="neuro-surgeon">Bedah Saraf</option>
<option value="oncology-surgeon">Bedah Tumor</option>
<option value="general-surgeon">Bedah Umum</option>
<option value="chiropractor">Chiropractic</option>
<option value="general-dentist">Dokter Gigi</option>
<option value="family-medicine-doctor">Dokter Keluarga</option>
<option value="general-practitioner">Dokter Umum</option>
<option value="endocrinologist">Endokrin Metabolisme dan Diabetes</option>
<option value="pediatric-endocrionologist">Endokrin Metabolisme dan Diabetes Anak</option>
<option value="reproductive-medicine-obstetrist">Fertilitas Endokrinologi Reproduksi</option>
<option value="maternal-fetal-medicine-obstetrist">Feto-Maternal</option>
<option value="forensic-physician">Forensik &amp; Medikolegal</option>
<option value="gastroenterologist">Gastroenterologi dan Hepatologi</option>
<option value="pediatric-gastroenterologist">Gastroenterologi dan Hepatologi Anak</option>
<option value="geriatric">Geriatri</option>
<option value="gynecologic-oncologist">Ginekologi Onkologi</option>
<option value="nephrologist">Ginjal dan Hipertensi</option>
<option value="pediatric-nephrologist">Ginjal dan Hipertensi Anak</option>
<option value="nutritionist">Gizi</option>
<option value="hematologist-and-oncology">Hematologi dan Onkologi</option>
<option value="pediatric-hematologist">Hematologi dan Onkologi Anak</option>
<option value="medical-check-up-installation-physician">Instalasi Medical Check Up</option>
<option value="pediatric-intesive-care-physician">Intensif Anak</option>
<option value="pediatric-cardiologist">Jantung Anak</option>
<option value="cardiologist">Jantung dan Pembuluh Darah</option>
<option value="interventional-cardiologist">Kardiologi Intervensi</option>
<option value="cardiovascular-medicine">Kardiovaskular</option>
<option value="physical-rehabilitation-medicine-specialist">Kedokteran Fisik dan Rehabilitasi</option>
<option value="pedodontist">Kedokteran Gigi Anak</option>
<option value="psychiatrist">Kedokteran Jiwa atau Psikiater</option>
<option value="nuclear-medicine-physician">Kedokteran Nuklir</option>
<option value="occupational-medicine-physician">Kedokteran Okupasi</option>
<option value="sport-medicine-physician">Kedokteran Olahraga</option>
<option value="aerospace-medicine-specialist">Kedokteran Penerbangan</option>
<option value="child-and-adolescent-psychiatrist">Kesehatan Jiwa Anak &amp; Remaja</option>
<option value="endodontist">Konservasi Gigi</option>
<option value="dermato-venerelogy">Kulit dan Kelamin</option>
<option value="pain-management">Manajemen Nyeri</option>
<option value="ophthalmologist">Mata</option>
<option value="pediatric-ophtalmology">Mata Anak</option>
<option value="microbiologist">Mikrobiologi Klinik</option>
<option value="neonatologist">Neonatologi</option>
<option value="neuro-anesthesia">Neuroanestesi</option>
<option value="obstetrician-gynecologist">Obstetri dan Ginekologi (Kebidanan dan Kandungan)</option>
<option value="radiation-oncologist">Onkologi Radiasi</option>
<option value="orthodontist">Ortodensia (Perawatan Maloklusi)</option>
<option value="clinical-parasitologist">Parasitologi Klinik</option>
<option value="pulmonologist">Paru</option>
<option value="pedriatric-pulmonologist">Paru Anak</option>
<option value="anatomical-pathologist">Patologi Anatomi</option>
<option value="clinical-pathologist">Patologi Klinik</option>
<option value="internist">Penyakit Dalam</option>
<option value="oral-medicine-physician">Penyakit Mulut</option>
<option value="infectious-diseases-physician">Penyakit Tropis</option>
<option value="pediatric-infectious-diseases-physician">Penyakit Tropis Anak</option>
<option value="intensive-care">Perawatan Intensif</option>
<option value="palliative-medicine-physician">Perawatan Paliatif</option>
<option value="perinatologist">Perinatologi</option>
<option value="periodontist">Periodonsia</option>
<option value="prosthodontist">Prosthodonsia</option>
<option value="radiologist">Radiologi</option>
<option value="interventional-radiologist">Radiologi Intervensi</option>
<option value="rehabilitation-dentist">Rehabilitasi Kedokteran Gigi</option>
<option value="rehabilitation-physician">Rehabilitasi Medik</option>
<option value="rheumatologist">Reumatologi</option>
<option value="neurologist">Saraf dan Neurologi</option>
<option value="pediatric-neurology">Saraf dan Neurologi Anak</option>
<option value="otolaryngologist-ent-head-and-neck-surgeon">Telinga Hidung Tenggorok-Bedah Kepala Leher</option>
<option value="trans-cranial-dopplereegtrans-magnetic-stimulation-tmspms">Trans Cranial Doppler/EEG/Trans Magnetic Stimulation (TMS/PMS)</option>
<option value="treadmill-echocardiography">Treadmill &amp; Echocardiography</option>
<option value="growth-and-development-specialist">Tumbuh Kembang Anak</option>
<option value="urologist">Urologi</option>
</select>
</span>
</div>

        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>SAKU adalah sebuah website yang dapat digunakan untuk melakukan analisis penyakit sesuai gejala yang dialami oleh pasien, disamping itu pasien dapat mencari Rumah Sakit dan Dokter yang terdaftar dalam website.</p>
                </div>
                <div class="col-lg-4">
                    <p>Dalam website ini juga, pasien dapat juga membuat janji dengan dokter yang di inginkan.</p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- sign up Section -->
    
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Fakultas Ilmu Komputer<br>Universitas Brawijaya, Malang</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About SAKU</h3>
                        <p>SAKU adalah sebuah website yang dapat digunakan untuk melakukan analisis penyakit sesuai gejala yang dialami oleh pasien, disamping itu pasien dapat mencari Rumah Sakit dan Dokter yag terdaftar dalam aplikasi. Selain itu, pasien dapat juga membuat janji dengan dokter yang di inginkan.</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Kelompok 5
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <hr class="star-primary">
                            <img src="temp/home/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <hr class="star-primary">
                            <img src="temp/home/img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <hr class="star-primary">
                            <img src="temp/home/img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris-data.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/home/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/home/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/home/js/freelancer.js"></script>

</body>

</html>
