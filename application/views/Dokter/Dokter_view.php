
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>SAKU - Janji pertemuan dokter</title>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/master-340b0920d72970bc6f036fed682edf30.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/chhFooter-28d2edfd9de1e5f339376b2e96780d88.css"/>
</head>
<body>
<header>
<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false">
<ul class="title-area inline-list">
<li class="name">
<a href="/">
<h3>SAKU.COM</h3>
</a>
</li>
 <li class="slogan">
<span>Kenali Penyakitmu</span>
<span>Lalu Obati</span>
</li>
</ul>
<section class="top-bar-section">
 
<ul class="right">
<li class="language desktop">
<a class='default' href='<?php echo base_url(); ?>#search'>MENU</a>
    </li>
<li class="language desktop">
<a class='default' href='<?php echo base_url(); ?>#about'>ABOUT</a>
</li>
<li class="has-dropdown nav-menu">
<a class='user-name' href="#"><div class="img" style="background-image: url(/assets/default/doctor_m.png)"></div><?php echo $_SESSION['Username']?></a>
<ul class="dropdown">
<li class="divider"></li>
<li><a href="<?php echo base_url(); ?>Dokter/lihatProfil">Profil Saya</a></li>
<li class="divider"></li>
<li><a href="/id/doctors/dashboard/sigit-8/schedule">Jadwal saya</a></li>
<li class="divider"></li>
<li><a href="/id/doctors/dashboard/sigit-8/doctor-appointments">Pertemuan saya</a></li>
<li class="divider"></li>
<li><a href="/id/doctors/dashboard/sigit-8/exceptions">Pengecualian</a></li>
<li class="divider"></li>
<li><a href="/id/doctors/dashboard/sigit-8/medical-center">Pusat Layanan Kesehatan Saya</a></li>
<li class="divider"></li>
<li><a href="/id/user/logout">Keluar</a></li>
</ul>
</li>
<li class="language desktop">
<a class='default' href='<?php echo base_url(); ?>Dokter/logout'>Logout</a>
</li>
</ul>
</section>
</nav>
</header>
<link rel="stylesheet" type="text/css" href="http://id.dokdokter.com/assets/builds/doctor-f93028a9383f779677b132eaf32eec98.css"/> <link rel="stylesheet" type="text/css" href="http://id.dokdokter.com/assets/builds/doctorDashboard-4c09ce53044f91e75e7354a7d579202a.css"/> <script src="https://code.angularjs.org/1.2.16/angular.min.js"></script>
<script src="http://id.dokdokter.com/assets/builds/doctorDashboard-5a8315878b4d73e123d68e47f9ae5958.js"></script>
<section class='maincontent clearfix dashboard'>
<div class='row'>
<div class="small-12 columns">
<ul class="breadcrumbs">
<li><a href="/id/doctors/dashboard/sigit-8/profile">Dokter</a></li>
<li><a href="/id/doctors/dashboard/sigit-8/profile"><?php echo $_SESSION['Username']?> </a></li>
<li class="current"><a href="#">Janji</a></li>
</ul>
</div>
<div class='small-12 medium-3 columns'>
<div class="d-panel sidenav">
<div class="doctor-image sameHeight" style="background-image: url(/assets/default/doctor_m.png);"></div>
<p class="name">dr sigit pangestu SpA </p>
<ul class='side-nav'>
<li class="level-2 ">
<a href="/id/doctors/dashboard/sigit-8/profile">Profil Saya</a>
</li>
<li class="level-2 ">
<a href="/id/doctors/dashboard/sigit-8/pictures">Gambar Saya</a>
</li>
<li class="level-2 ">
<a href="/id/doctors/dashboard/sigit-8/schedule">Jadwal saya</a>
</li>
<li class="level-2  active ">
<a href="/id/doctors/dashboard/sigit-8/doctor-appointments">Pertemuan saya</a>
</li>
<li class="level-2 ">
<a href="/id/doctors/dashboard/sigit-8/exceptions">Pengecualian</a>
</li>
<li class="level-2 ">
<a href="/id/doctors/dashboard/sigit-8/medical-center">Pusat Layanan Kesehatan Saya</a>
</li>
</ul>
</div>
</div>
<div class='small-12 medium-9 columns'>
<div class="d-panel d-content">
<h3>Atur janji pertemuan anda</h3>
<p>Klik pada janji pertemuan dan ubah statusnya.</p>
<div id='appointments-calendar'></div>
<div id="appointment-info">
<div class="row">
<div class="small-4 columns">
<p class="tag">Pasien:</p>
</div>
<div class="small-8 columns">
<p id="name"></p>
</div>
<div class="small-4 columns">
<p class="tag">Nomor telepon:</p>
</div>
<div class="small-8 columns">
<p id="phone"></p>
</div>
<div class="small-4 columns">
<p class="tag">Waktu / Tanggal:</p>
</div>
<div class="small-8 columns">
<p><span id="from"></span> - <span id="to"></span> / <span id="day"></span></p>
</div>
</div>
<input type="hidden" name="slot-id" id="slot-id" value="">
<ul class="button-group radius">
<li><a id="pending" href="javascript:setAppointmentStatus('pending')" class="tiny button pending active">Pending</a></li>
<li><a id="accepted" href="javascript:setAppointmentStatus('accepted')" class="tiny accepted button">Diterima</a></li>
<li><a id="rejected" href="javascript:setAppointmentStatus('rejected')" class="tiny button">Ditolak</a></li>
<li><a id="completed" href="javascript:setAppointmentStatus('completed')" class="tiny completed button">Selesai</a></li>
</ul>
</div> </div>
</div>
</div>
</section>
<footer id="chh-footer">
<div class="chh-bottom">
<div class="chh-row">
    
<div class="copyright">
<p>Copyright &copy; Kelompok 5</p>
</div>
</div>
</div>
</footer>

<script src="//use.typekit.net/gkc1vhr.js"></script>
<script src="http://id.dokdokter.com/assets/builds/master-3a27568b93242798cbe2502d31879fc3.js"></script>
<script src="http://id.dokdokter.com/js-localization/localization.js"></script>
<script type="text/javascript" src="http://id.dokdokter.com/js-localization/messages"></script>
<script src="http://id.dokdokter.com/assets/builds/chhFooter-8ddfd0220a7f85d1b78633fa60258b4d.js"></script> <script src="http://id.dokdokter.com/assets/builds/geocomplete-be0492b5f865c4dc46865fd47091b242.js"></script>
 
 

<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-46492109-19', 'auto');
         ga('send', 'pageview');

    </script>
</body>
</html>