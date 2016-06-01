<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['Username']?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>Admin/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/index"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>User/datapendaftardokter"><i class="fa fa-fw fa-bar-chart-o"></i> Konfirmasi Pendaftaran Dokter</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admin/datauser"><i class="fa fa-fw fa-bar-chart-o"></i> Data User</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Kelola Data Rumah Sakit <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                        <a href="<?php echo base_url(); ?>Rumah_Sakit/loadData"><i class="fa fa-fw fa-bar-chart-o"></i> Tambah Data Rumah Sakit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Rumah_Sakit/update_rumah_sakit"><i class="fa fa-fw fa-table"></i> Update Data Rumah Sakit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Rumah_Sakit/delete_rumah_sakit"><i class="fa fa-fw fa-edit"></i> Delete Data Rumah Sakit</a>
                    </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Kelola Data Penyakit <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                        <a href="<?php echo base_url(); ?>Penyakit/loadData"><i class="fa fa-fw fa-bar-chart-o"></i> Tambah Data Penyakit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Penyakit/update_penyakit"><i class="fa fa-fw fa-table"></i> Update Data Penyakit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Penyakit/delete_penyakit"><i class="fa fa-fw fa-edit"></i> Delete Data Penyakit</a>
                    </li>
                        </ul>
                    </li>
                        </ul>
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
                            Data User
                        </h1>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-table"></i> Data User
                            </li>
                        </ol>
                    </div>
					<body>
        <h1>Tabel User</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Spesialis</th>
                    <th>Jenis Kelamin</th>
                    <th>Username</th>
					<th>Tanggal Lahir</th>
                    <th>Email</th>
					<th>Hapus</th>
                </tr>
            </thead>

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
				echo "<a href='".site_url('User/hapusUser/'.$user->Username)."')'><button>Hapus</button></a>";
				print "<td>";
                
            }
            ?>
        </tbody>
    </table>
	
</body>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>

</body>

</html>
