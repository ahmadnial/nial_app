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
            <div class="container bg-success text-white mt-5 col-8 text-center">
                <h1>TINDAKAN</h1>
            </div>
        </header>

        <div class="container-xxl">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-6 col-sm-12">
                            <form method="POST">
                            <div class="f-group">
                                <label for="">Tanggal masuk</label>
                                <input type="date" id="tgl_msk" name="t_tgl_masuk" class="form-control tgl_now" required>
                            </div>
                            <div class="f-group">
                                <label for="">Masuk Pukul</label>
                                <input type="time" id="jam_msk" name="t_jam_masuk" class="form-control jam_now" required>
                            </div>
                            <div class="f-group">
                                <label for="">Kode Register</label>
                                <input type="text" class="form-control">
                            </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
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