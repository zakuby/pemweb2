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
    <link href="<?php echo base_url(); ?>assets/dokter/css/buatjanji.css" rel="stylesheet">

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
                        <a href="<?php echo base_url(); ?>Pasien/lihatDaftarDokter"><i class="fa fa-fw fa-user"></i> Lihat Daftar Dokter</a>
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
                  <div class="col-lg-12">
                        <h1 class="page-header">
                            Profil
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
                
                
                //<a href='".site_url('Dokter/buatJanji('.$user->Username.')')."'><button>Buat Janji</button></a>
            }
            ?>
        </table></th>
      </tr>
    </thead>
    </table>
  
  </div>
  <form method="post" action="<?php echo site_url('Dokter/BuatJanji/'.$user->Username)?>">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->

<td>Nama :</td>
<td><?php echo $_SESSION['Username']?></td>
</tr>

<tr>
<td>Tanggal :</td> 
<td>
<select name="hari" id="hari">
<option value="-1">Tanggal:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>

<select id="bulan" name="bulan">
<option value="-1">Bulan:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
</td>
</tr>
 <tr>
<td>Jam :</td> 
<td>

<select id="jam" name="jam">
<option value="-1">Jam:</option>
<option value="10:00">10:00</option>
<option value="11:00">11:00</option>
<option value="12:00">12:00</option>
<option value="13:00">13:00</option>
<option value="14:00">14:00</option>
<option value="15:00">15:00</option>
<option value="16:00">16:00</option>
<option value="17:00">17:00</option>
<option value="18:00">18:00</option>
<option value="19:00">19:00</option>
<option value="20:00">20:00</option>
<option value="21:00">21:00</option>
</select>
</td>
</tr>
<tr>
<td>Keluhan :</td>
<td><textarea name="keluhan" maxlength="100"></textarea></td>
</tr>
    </label></td>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="ttambah" value="Buat Janji"></td>
  </tr>
 
</table>
</form>
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
