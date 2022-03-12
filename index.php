<!DOCTYPE html>
<html lang="en">

<?php
// panggil file koneksi
include "conn.php";
include "update.php";
include "insert.php";
include "addpasienbaru.php";
include "UpdateForm.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Eksekusi</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Asses SB-Admin -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dashboard/dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="dashboard/dist/img/AdminLTELogo." alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SIM RS XXX</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dashboard/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Hello, Ahmad !</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
                            <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                            </div>
                        </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!-- <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="dashboard/index2.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="tindakan.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Tindakan
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    View
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Layout Options
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation + Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Boxed</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Navbar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Footer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Collapsed Sidebar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <header>
            <div class="container bg-success text-white mt-5 col-10 text-center">
                <h1>REGISTER PASIEN</h1>
            </div>
        </header>
        <div class="container-xxl">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <form method="POST">
                                    <h5 for="" class="sub-ttl bg-success text-white ">TANGGAL & JAM MASUK</h5>
                                    <div class="f-group">

                                        <label for="">Tanggal masuk</label>
                                        <input type="date" id="tgl_msk" name="t_tgl_masuk" class="form-control tgl_now" required>
                                    </div>
                                    <div class="f-group">
                                        <label for="">Masuk Pukul</label>
                                        <input type="time" id="jam_msk" name="t_jam_masuk" class="form-control jam_now" required>
                                    </div>
                                    <h5 for="" class="sub-ttl mt-4 bg-success text-white">DATA PASIEN</h5>
                                    <div class="f-group">
                                        <label for="">Nama</label>
                                        <input type="text" placeholder="Nama Pasien" id="namaPx" name="i_nm_pasien" class="form-control" required>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col-md ">
                                            <div class="form-floating mt-3">
                                                <input type="text" class="form-control" id="tl_lahir" name="i_tl_pasien" required>
                                                <label for="tl_lahir">Tempat Lahir</label>
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="form-floating mt-3">
                                                <input type="date" name="i_tal_pasien" class="form-control tgl_now" id="ta_lahir" required>
                                                <label for="ta_lahir">Tanggal Lahir</label>
                                            </div>
                                        </div>


                                        <div class="col-md">
                                            <div class="form-floating mt-3">
                                                <input type="text" name="i_umur" class="form-control" id="umur" required>
                                                <label for="umur">Umur</label>
                                            </div>
                                        </div>


                                        <div class="f-group">
                                            <label for="">Jenis Kelamin</label>
                                            <select class="form-select" aria-label="Default select example" id="sex" name="i_sex" required>
                                                <option selected>--Choose--</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>

                                        </div>


                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control" name="i_alamat" id="alamat" rows="3" required="Silahkan lengkapi dulu!"></textarea>
                                        </div>
                                    </div>

                                    <div class="f-group mt-0">
                                        <label for="">No.Tlp</label>
                                        <input type="text" placeholder="Nomor Telepon Pasien" id="no_tlp" name="i_no_tlp" class="form-control">
                                    </div>

                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <h5 for="" class="sub-ttl bg-success text-white">INFO REGISTER</h5>
                                <div class="f-group">
                                    <label for="">Kode Register</label>
                                    <input type="text" placeholder="Kode Register Pasien" onKeyUp="getDetails()" id="kd_reg" name="kd_reg_pasien" class="form-control">
                                </div>

                                <div class="f-group mt-2">
                                    <label for="">No.RM</label>
                                    <input type="text" id="no_rm" placeholder="Nomor Rekam Medis Pasien" name="no_rm_pasien" class="form-control">
                                    <!-- <button type="button" data-toggle="modal" data-target="#exampleModal" name="addMr" id="addMrID" class="btn btn-success float-right mt-2 mb-3 btn btn-primary btn-sm">add pasien baru</button> -->
                                </div>

                                <!--Form Pop Up add Pasien Baru-->
                                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Pasien Baru</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="contactForm" name="contact" role="form">
                                                    <div class="f-group">
                                                        <label for="">Nama</label>
                                                        <input type="text" placeholder="Nama Pasien" id="namaPx" name="ipop_nm_pasien" class="form-control" required>
                                                    </div>

                                                    <div class="row g-2">
                                                        <div class="col-md ">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" class="form-control" id="tl_lahir" name="ipop_tl_pasien" required>
                                                                <label for="tl_lahir">Tempat Lahir</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md">
                                                            <div class="form-floating mt-3">
                                                                <input type="date" name="ipop_tal_pasien" class="form-control tgl_now" id="ta_lahir" required>
                                                                <label for="ta_lahir">Tanggal Lahir</label>
                                                            </div>
                                                        </div>


                                                        <div class="col-md">
                                                            <div class="form-floating mt-3">
                                                                <input type="text" name="ipop_umur" class="form-control" id="umur" required>
                                                                <label for="umur">Umur</label>
                                                            </div>
                                                        </div>


                                                        <div class="f-group">
                                                            <label for="">Jenis Kelamin</label>
                                                            <select class="form-select" aria-label="Default select example" id="sex" name="ipop_sex" required>
                                                                <option selected>--Choose--</option>
                                                                <option value="Laki-Laki">Laki-Laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>

                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <textarea class="form-control" name="ipop_alamat" id="alamat" rows="3" required="Silahkan lengkapi dulu!"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="f-group mt-0">
                                                        <label for="">No.Tlp</label>
                                                        <input type="text" placeholder="Nomor Telepon Pasien" id="no_tlp" name="ipop_no_tlp" class="form-control">
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" name="btPXbaru" id="btPxbaruID" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" name="btPXbaruadd" class="btn btn-primary">Save</button>

                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!--End Form Pop Up add Pasien Baru-->

                                <div class="f-group mt-4">
                                    <label for="">Layanan</label>
                                    <select class="form-select" aria-label="Default select example" id="layanan" name="layanan">
                                        <option selected>--Choose--</option>
                                        <option value="Poli Syaraf">Poli Syaraf</option>
                                        <option value="Poli Penyakit Dalam">Poli Penyakit Dalam</option>
                                        <option value="Poli Bedah">Poli Bedah</option>
                                        <option value="Poli Anak">Poli Anak</option>
                                        <option value="Poli Obsgyn">Poli Obsgyn</option>
                                    </select>
                                </div>

                                <div class="f-group mt-2">
                                    <label for="">Dokter Layanan</label>
                                    <input type="text" placeholder="Dokter Layanan Tujuan" name="dokter" id="dr_layanan" class="form-control">
                                </div>

                                <div class="f-group mt-2">
                                    <label for="">Instalasi</label>
                                    <select class="form-select" aria-label="Default select example" id="inst" name="inst">
                                        <option selected>--Choose--</option>
                                        <option value="RJ">Rawat Jalan</option>
                                        <option value="RI">Rawat Darurat</option>
                                    </select>
                                </div>

                                <div class="f-group mt-2">
                                    <label for="">Kelas Layanan</label>
                                    <select class="form-select" id="kls_layanan" aria-label="Default select example" name="kls_layanan">
                                        <option selected>--Choose--</option>
                                        <option value="kelas 1">Kelas I</option>
                                        <option value="kelas 2">Kelas II</option>
                                        <option value="kelas 3">Kelas III</option>
                                        <option value="kelas VIP">Kelas VIP</option>
                                    </select>
                                </div>

                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="f-group mt-2">
                                            <label for="">Jaminan</label>
                                            <select class="form-select" id="jaminan" aria-label="Default select example" name="jaminan">
                                                <option selected>--Choose--</option>
                                                <option value="JKN PBI">BPJS PBI</option>
                                                <option value="JKN NPBI">BPJS NON PBI</option>
                                                <option value="JAMKESOS">JAMKESOS</option>
                                                <option value="KEMKES">KEMENKES</option>
                                                <option value="JAMPERSAL">JAMPERSAL</option>
                                                <option value="UMUM">UMUM</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="f-group mt-2">
                                            <label for="floatingInputGrid">No.Peserta</label>
                                            <input type="text" id="no_peserta" class="form-control" name="no_pes">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="f-group mt-2">
                                                <label for="">Cara Masuk</label>
                                                <select class="form-select" id="cara_masuk" aria-label="Default select example" name="cara_masuk">
                                                    <option selected>--Choose--</option>
                                                    <option value="Datang Sendiri">Datang Sendiri</option>
                                                    <option value="Rujukan Puskesmas">Rujukan Puskesmas</option>
                                                    <option value="Rujukan RSU/RSK">Rujukan RSU/RSK</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="f-group mt-2">
                                                <label for="floatingInputGrid">Faskes Rujukan</label>
                                                <input type="text" id="f_rujukan" class="form-control" name="f_rujukan">
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                            <button type="sumbit" name="save" class="btn btn-success btn btn-primary btn-sm">Simpan</button>
                                            <button type="submit" name="update" class="btn btn-warning btn btn-primary btn-sm">Update</button>
                                            <button type="reset" class="btn btn-danger btn btn-primary btn-sm">Reset</button>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <footer class="main-footer mt-4 text-center">
                            <div class="float-right d-none d-sm-block">
                                <b>Version</b> 3.2.0
                            </div>
                            <strong>Copyright &copy; 2014-2021 <a href="">MasAhmad!</a></strong> All rights reserved.
                        </footer>

                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                        </aside>
                        <!-- /.control-sidebar -->
                    </div>
                    <!-- ./wrapper -->

                    <!-- jQuery -->
                    <script src="dashboard/plugins/jquery/jquery.min.js"></script>
                    <!-- Bootstrap 4 -->
                    <script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="dashboard/dist/js/adminlte.min.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <!-- <script src="dashboard/dist/js/demo.js"></script>  -->
                    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>