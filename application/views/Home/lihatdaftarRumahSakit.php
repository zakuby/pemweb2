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
    <link href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/home/css/freelancer.css" rel="stylesheet">

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
                <a class="navbar-brand" href="<?php echo base_url(); ?>">SAKU.COM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url(); ?>">Menu</a> 
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Tentang</a>
                    </li>
					<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Daftar <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                                <a href="<?php echo base_url(); ?>Home/registrasi_pasien">Sebagai Pasien</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Home/registrasi_dokter">Sebagai Dokter</a>
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
                    <h2>Lihat Daftar Rumah Sakit</h2>
                    <hr class="star-primary">
                </div>
            </div>
            

             <form id="form-search" action='<?php echo base_url(); ?>User/search' method='get'>
    
    </form>
             
             
             
                        <div class="panel panel-default">
                            <div class="panel-heading">
                  </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    
                                    
                                   
          <table width="389" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>                    
                    <th>NO. Telepon</th>
                    <th>Keterangan</th>
                </tr>
            </thead>

            <?php
            foreach ($data as $user) {
                print "<tr>";
                print "<td>";
                print $user->id;
                print "<td>";
                print $user->nama;
                print "<td>";
                print $user->alamat; 
                print "<td>";
                print $user->no_telp;
                print "<td>";
                print $user->keterangan;
                
            }
            ?>
        </tbody>
    </table> 
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang</h2>
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
                        
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>SAKU</h3>
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

    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris-data.js"></script>
	

</body>

</html>
