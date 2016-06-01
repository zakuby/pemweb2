<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
    <meta name="author" content="">

    <title>Lihat Daftar Dokter</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/dokter/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dokter/css/sb-admin.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index">
                <h4><b><u>SAKU.COM</u></b></h4></a>
            </div>
            <!-- Top Menu Items -->
             <ul class="nav navbar-right top-nav">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['Username']?> <b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>Pasien/lihatProfil"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>Pasien/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>Pasien/lihatProfil"><i class="fa fa-fw fa-user"></i> Profile saya</a>
                  </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Pasien/lihatDaftarJanji"><i class="fa fa-fw fa-table"></i> Lihat Daftar Janji</a>
                    </li>                    
                    <li>
                        <a href="<?php echo base_url(); ?>Pasien/logout"><i class="fa fa-fw fa-power-off"></i> Keluar</a>
                    </li>               
                </ul>
            </div>
            <!-- /.navbar-collapse -->      
        </nav>

        <div id="page-wrapper">

          <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  <div >
                        <h1 class="page-header">
                            Daftar Dokter
                di Kota Malang</h1>
                        
                        
                        <div unselectable="on" class="small-12 medium-9 columns">
<div unselectable="on" class="d-panel d-content">

<form action="/doctors/sigit-8/edit-profile" method="POST" enctype="multipart/form-data" class="d-profile" unselectable="on">
<div unselectable="on" class="row">
  <div unselectable="on" class="medium-3 small-12 columns"></div>
</div>
<div unselectable="on" class="medium-9 small-12 right columns">
  <div unselectable="on" class="medium-6 small-12 right columns save-user-btn"></div>
</div>
</form>
</div>
                        
             <div class="col-lg-4">
             
             
                 <form id="form-search" action='<?php echo base_url(); ?>User/search' method='get'>
    <div >
    <div >
    <label>Spesialis </label>
    <span class="dropdown">
    <select class="my-select" name='spesialis'>
    <option value="all">Pilih spesialisasi...</option>
    <option value="">Spesialis</option>
    <option value="Jantung">Jantung</option>
    <option value="Kulit">Kulit</option>
    <option value="Paru-Paru">Paru-Paru</option>
    <option value="Anak">Anak</option>
    <option value="THT">THT</option>
    </select>
    <input type='submit' class="btn btn-primary" value='CARI LAGI'/>
    </span></div>
     
    <div class="large-4 medium-4 small-12 columns height-fixed">
    <div class="button-container">
      <p>&nbsp;</p>
    </div>
    </div>
    </div>
    
    </form>
             
             
             
                        <div class="panel panel-default">
                            <div class="panel-heading">
                  </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    
                                    
                                   
        <table width="389" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Spesialis</th>                    
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>

            <?php
            foreach ($data as $user) {
                print "<tr>";
                print "<td>";
				echo "<a href='".site_url('User/lihatProfilUserLain/'.$user->Username)."'> $user->First_Name $user->Last_Name</a>";
                //print $user->First_Name . " " . $user->Last_Name;
                print "<td>";
                print $user->Alamat . "." . $user->Kota . "." . $user->Propinsi; 
				print "<td>";
                print $user->Spesialis; 
                print "<td>";
                print $user->Jenis_Kelamin;
                print "<td>";
                print $user->Email;
				print "<td>";
				echo "<a href='".site_url('Dokter/buatjanjiDokter/'.$user->Username)."'><button>Detail</button></a>";
                
            }
            ?>
        </tbody>
    </table> 
    
    
    
                            </div>
                                <div class="text-right">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                   
                
                  </div>


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

<script src="<?php echo base_url();?>assets/dokter/js/JSsearch.js" type="text/javascript"></script>
</body>

</html>
