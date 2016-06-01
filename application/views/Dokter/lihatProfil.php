<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
    <meta name="author" content="">

    <title>DOKTER Lihat Profil</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/dokter/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dokter/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dokter/css/dokdokter.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <h4><b><u>SAKU.COM</u></b></h4></a>
            </div>
            <!-- Top Menu Items -->
             <ul class="nav navbar-right top-nav">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['Username']?> <b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>Dokter/lihatProfil"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>Dokter/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>Dokter/lihatProfil"><i class="fa fa-fw fa-user"></i> Profile saya</a>
                  </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Dokter/lihatDaftarJanji"><i class="fa fa-fw fa-table"></i> Lihat Daftar Janji</a>
                    </li>                    
                    <li>
                        <a href="<?php echo base_url(); ?>Dokter/logout"><i class="fa fa-fw fa-power-off"></i> Keluar</a>
                    </li>               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

          <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  <div class="col-lg-12">
                        <h1 class="page-header">
                            Profil Saya
                        </h1>
          
                        <div unselectable="on" class="small-12 medium-9 columns">
<div unselectable="on" class="d-panel d-content">



<div unselectable="on" class="row">
  <div unselectable="on" class="medium-3 small-12 columns">
    <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th width="65"><table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
            <thead>
              <tr>
                <th width="99">Nama</th>
                <th width="65">Alamat</th>
                <th width="76">Spesialis</th>
                <th width="92">Jenis Kelamin</th>
                <th width="122">Username</th>
                <th width="137">Tanggal Lahir</th>
                <th width="64">Email</th>
              </tr>
            </thead>
          <!--/isi table/-->
          <?php
            foreach ($u as $user) {
                print "<tr>";
                print "<td>";
                print $user->First_Name . " " . $user->Last_Name;
                print "<td>";
                print $user->Alamat . "." . $user->Kota . "." . $user->Propinsi; 
                print "<td>";
                print $user->Spesialis;
                print "<td>";
                print $user->Jenis_Kelamin;
                print "<td>";
                print $user->Username;
                print "<td>";
				print $user->Tanggal_Lahir;
				print "<td>";
                print $user->Email;
				print "<td>";
				echo "<a href='editProfil' ><button>update profil</button></a>";
				
				//<a href='".site_url('Dokter/buatJanji('.$user->Username.')')."'><button>Buat Janji</button></a>
            }
            ?>
        <!-- <tr>
            <th scope="row"><a href="<?php echo base_url(); ?>Dokter/buatJanji">
             <?php
          if ($_SESSION['Level'] == '2') {
                            ?>
              <input unselectable="on" class="button orange confirm submit-button" value="Buat Janji" type="button" >
              <?php } ?>
            </a></th>
            <td><span class="medium-6 small-12 right columns save-user-btn"><a href="<?php echo base_url(); ?>Dokter/editProfil">
            <?php
          if ($_SESSION['Level'] == '2') {
                            ?>
              <input unselectable="on" class="button orange confirm submit-button" value="Update Profil" type="button" >
              <?php } ?>
            </a></span></td>
          </tr>
          <tr>
            <th scope="row"><a href="<?php echo base_url(); ?>Dokter/editProfil"></a></th>
            <td>&nbsp;</td>
          </tr> -->
        </table></th>
      </tr>
    </thead>
    </table>
  </div>
</div>
<div unselectable="on" class="medium-9 small-12 right columns">
  <div unselectable="on" class="medium-6 small-12 right columns save-user-btn"></div>
</div>

</div>
                        </div>
                        <div class="row">
                          
                            
                              
                              <div class="text-right"></div>
                            </div>
                        </div>
                    </div>
              </div>
                <!-- /.row -->

          </div>
            <!-- /.container-fluid -->

      </div>
        <!-- /#page-wrapper -->

</div>
</div></div>
    <!-- /#wrapper -->

   <!-- jQuery -->
 <script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris-data.js"></script>


</body>

</html>
