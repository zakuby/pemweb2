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
                            Tambah Data Rumah Sakit
                        </h1>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Tambah Data Rumah Sakit
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<h1>Tabel karyawan</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aamat</th>
                    <th>NO. Telepon</th>
                    <th>Keterangan</th>
                </tr>
            </thead>

            <?php
            foreach ($k as $karyawan) {
                print "<tr>";
                print "<td>";
                print $karyawan->id;
                print "<td>";
                print $karyawan->nama;
                print "<td>";
                print $karyawan->alamat;
                print "<td>";
                print $karyawan->no_telp;
                print "<td>";
                print $karyawan->keterangan;
                print "<td>";
                
            }
            ?>
        </tbody>
    </table>

<form method="post" action="<?php echo base_url(); ?>Rumah_Sakit/Tambah">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" size="50">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">No Telp</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="no_telp" type="text" size="15">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Keterangan</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
    <textarea name="keterangan"></textarea>
    </label></td>
  </tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="ttambah" value="TAMBAH"></td>
  </tr>
 
</table>
</form>
                <!-- Flot Charts -->
                
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

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/s/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/flot-data.js"></script>

</body>

</html>
