<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tindakan</title>

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

<body>
    <header>
        <div class="container bg-success text-white mt-5 col-8 text-center shadow-lg">
            <h1>TINDAKAN</h1>
        </div>
    </header>

    <div class="container-xxl">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <form method="POST">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="form-floating mt-0">
                                        <input type="" id="no_tindakan" name="no_tindakan" class="form-control" required>
                                        <label for="">No.Tindakan</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mt-0">
                                        <input type="" id="no_reg" name="no_reg" class="form-control" required>
                                        <label for="">No.Registrasti</label>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-4 ">
                                        <div class="form-floating mt-0">
                                            <input type="date" id="tgl_msk" name="t_tgl_masuk" class="form-control tgl_now" required>
                                            <label for="tl_lahir">Tanggal</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating mt-0">
                                            <input type="time" id="jam_msk" name="t_jam_masuk" class="form-control jam_now" required>
                                            <label for="ta_lahir">Jam</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mt-0 ">
                                            <input type="text" name="sex" class="form-control" id="sex" required>
                                            <label for="umur">Sex</label>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <div class="form-floating mt-0">
                                                <input type="" id="layanan" name="layanan" class="form-control" required>
                                                <label for="tl_lahir">Layanan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-floating mt-0">
                                                <input type="" id="dokter" name="dokter" class="form-control" required>
                                                <label for="">Dokter</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-lg-6 col-sm-12">
                        <!-- <h5 for="" class="sub-ttl bg-success text-white">INFO REGISTER</h5> -->
                        <div class="row g-2">
                            <div class="col-md-12">
                                <div class="form-floating mt-0">
                                    <input type="text" id="layanan" name="layanan" class="form-control" required>
                                    <label for="tl_lahir">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mt-0">
                                    <input type="text" id="alamat" name="alamat" class="form-control" required>
                                    <label for="alamat">Alamat</label>
                                </div>
                            </div>

                            <div class="col-md-6 row g-2">
                                <div class="form-floating mt-0">
                                    <input type="text" id="layanan" name="layanan" class="form-control" required>
                                    <label for="tl_lahir">Tanggal Lahir</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-0">
                                    <input type="text" id="layanan" name="layanan" class="form-control" required>
                                    <label for="tl_lahir">Umur</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mt-0">
                                    <input type="text" id="layanan" name="layanan" class="form-control" required>
                                    <label for="tl_lahir">No.Tlp</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mt-0">
                                    <input type="text" id="layanan" name="layanan" class="form-control" required>
                                    <label for="tl_lahir">Jaminan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

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