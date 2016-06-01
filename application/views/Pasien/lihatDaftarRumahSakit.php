<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
    <meta name="author" content="">

    <title>DOKTER Lihat Daftar Rumah Sakit</title>

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
                            Daftar Rumah Sakit di Kota Malang</h1>
                        
                        
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
    
    
    
                                
                          
                                
                                
                                
                             <!--         <table width="561" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                              <th width="81">Nama</th>
                                              <th width="81">Alamat</th>
                                                <th width="81"><div align="center">Nomor Telp.</div></th>
                                                <th width="107"><div align="center">Keterangan</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>-->    
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

</body>

</html>
